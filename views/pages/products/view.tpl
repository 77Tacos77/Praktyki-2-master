{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="product-page">

        <!-- GŁÓWNA ZAWARTOŚĆ -->
        <div class="product-wrapper">

            <!-- LEWA STRONA -->
            <div class="product-image">
                {if $product->getImages() && $product->getImages()->first()}
                    <img id="mainProductImage" src="/Praktyki-2-master/uploads/{$product->getImages()->first()->getAlt()}" width="400">
                {/if}
            </div>

            <!-- PRAWA STRONA -->
            <div class="product-info">

                <h1>{$product->getName()}</h1>
                <p>{$product->getDescription()}</p>

                {assign var=variant value=$product->getVariants()->first()}
                <h2>{$variant->getPrice()} zł</h2>

                <h3>Wybierz wariant:</h3>

                <form method="POST" action="/Praktyki-2-master/?page=cart/add">

                    <input type="hidden" name="product_id" value="{$product->getId()}">

                    <div class="variant-container">

                        {foreach $variantImages as $variant}

                            <label class="variant-box">

                                <input type="radio" name="variant_id" value="{$variant->getId()}" data-image="/Praktyki-2-master/uploads/{$variant->getImage()}" required>

                                <img src="/Praktyki-2-master/uploads/{$variant->getImage()}">

                                <div>{$variant->getColor()}</div>

                            </label>

                        {/foreach}

                    </div>

                    <button class="buy-btn">Dodaj do koszyka</button>

                </form>

            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="product-sidebar">

            <h3>Polecane produkty</h3>

            {foreach $otherProducts as $p}
                {if $p->getId() != $product->getId()}

                    <a href="/Praktyki-2-master/?page=product/view&id={$p->getId()}" class="sidebar-item">

                        {if $p->getImages() && $p->getImages()->first()}
                            <img src="/Praktyki-2-master/uploads/{$p->getImages()->first()->getAlt()}">
                        {/if}

                        <div class="sidebar-name">
                            {$product->getName()}
                        </div>

                    </a>

                {/if}
            {/foreach}

        </div>

    </div>

    <!-- JS -->
    <script>
        const radios = document.querySelectorAll('input[name="variant_id"]');
        const mainImage = document.getElementById('mainProductImage');

        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                const newImage = this.dataset.image;

                if (newImage) {
                    mainImage.style.opacity = 0;

                    setTimeout(() => {
                        mainImage.src = newImage;
                        mainImage.style.opacity = 1;
                    }, 150);
                }
            });
        });

        if (radios.length > 0) {
            radios[0].checked = true;
            radios[0].dispatchEvent(new Event('change'));
        }
    </script>

{/block}