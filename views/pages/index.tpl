{extends file="layouts/default.tpl"}

{block name="content"}
    <h1 class="products-title">Nasze produkty</h1>
    <hr>
    <div class="products-page">
        <div class="filters">


            <label>Kolor</label>

            <select id="colorFilter">
                <option value="">Wszystkie kolory</option>

                {foreach $colors as $c}
                    <option value="{$c}">{$c}</option>
                {/foreach}
            </select>



            <label>Cena</label>

            <select id="sortFilter">
                <option value="">Sortuj</option>
                <option value="price-asc">Cena rosnąco</option>
                <option value="price-desc">Cena malejąco</option>
            </select>


        </div>



        <div class="products-grid">

            {foreach $products as $p}

                {assign var=variant value=$p->getVariants()->first()}

                <a href="/Praktyki-2-master/?page=product/view&id={$p->getId()}" class="product-card" data-color="{$p->colors|@implode:' '}" data-price="{$variant->getPrice()}">

                    <div class="product-image">
                        {assign var=image value=$p->getImages()->first()}

                        {if $image}

                            <img src="/Praktyki-2-master/uploads/{$image->getAlt()}" alt="Produkt" class="product-main-image" id="img-{$p->getId()}">

                        {else}
                            <img src="/Praktyki-2-master/uploads/default.jpg" alt="Brak zdjęcia">
                        {/if}
                    </div>

                    <div class="product-content">
                        <h2>{$p->getName()}</h2>
                        <p>{$p->getDescription()}</p>

                        {if isset($p->colors)}
                            <div class="color-dots">

                                {foreach $p->getVariantImages() as $img}
                                    <span class="color-dot" data-image="{$img->getImage()}" data-product="{$p->getId()}" data-color="{$img->getColor()}" title="{$img->getColor()}"></span>
                                {/foreach}

                            </div>
                        {/if}

                        {if $variant}
                            <p class="product-price">Cena: {$variant->getPrice()} zł</p>
                        {else}
                            <p class="product-price">Brak ceny</p>
                        {/if}
                    </div>

                </a>

            {/foreach}

        </div>


    </div>
    <script>
        const colorFilter = document.getElementById("colorFilter");
        const sortFilter = document.getElementById("sortFilter");
        const products = document.querySelectorAll(".product-card");

        // ✅ FILTROWANIE
        function filterProducts() {

            const selectedColor = colorFilter.value;

            products.forEach(product => {

                const color = product.dataset.color || "";
                let show = true;

                // 🔽 FILTER
                if (
                    selectedColor &&
                    !color.toLowerCase().includes(selectedColor.toLowerCase())
                ) {
                    show = false;
                }

                product.style.display = show ? "" : "none";

                // 🔥 NOWOŚĆ → ZMIANA ZDJĘCIA
                if (selectedColor && show) {

                    const dots = product.querySelectorAll(".color-dot");

                    dots.forEach(dot => {

                        if (dot.dataset.color.toLowerCase() === selectedColor.toLowerCase()) {

                            const img = dot.dataset.image;
                            const productId = dot.dataset.product;

                            const targetImg = document.getElementById("img-" + productId);

                            if (targetImg) {
                                targetImg.src = "/Praktyki-2-master/uploads/" + img;
                            }

                            // highlight
                            dots.forEach(d => d.classList.remove("active"));
                            dot.classList.add("active");
                        }
                    });
                }

            });
        }


        // ✅ SORTOWANIE
        function sortProducts() {
            const container = document.querySelector(".products-grid");
            const items = Array.from(container.querySelectorAll(".product-card"));

            if (sortFilter.value === "price-asc") {
                items.sort((a, b) => a.dataset.price - b.dataset.price);
            }

            if (sortFilter.value === "price-desc") {
                items.sort((a, b) => b.dataset.price - a.dataset.price);
            }

            items.forEach(el => container.appendChild(el));
        }

        // ✅ EVENTY
        colorFilter.addEventListener("change", filterProducts);
        sortFilter.addEventListener("change", sortProducts);

        // ✅ KLIK KROPKI → ZMIANA ZDJĘCIA
        document.querySelectorAll(".color-dot").forEach(dot => {
            dot.addEventListener("click", (e) => {

                e.preventDefault();
                e.stopPropagation();

                const img = dot.dataset.image;
                const productId = dot.dataset.product;

                const targetImg = document.getElementById("img-" + productId);

                if (targetImg) {
                    targetImg.src = "/Praktyki-2-master/uploads/" + img;
                }

                // ✅ highlight aktywnej kropki
                dot.closest(".product-card")
                    .querySelectorAll(".color-dot")
                    .forEach(d => d.classList.remove("active"));

                dot.classList.add("active");
            });
        });
    </script>

{/block}