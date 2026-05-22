{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="edit-layout">

        <div class="left-panel">

            <form method="POST" action="/Praktyki-2-master/?page=products/update&id={$product->getId()}" enctype="multipart/form-data" class="edit-product-form">

                <div class="form-group">
                    <label>Nazwa produktu</label>
                    <input type="text" name="name" value="{$product->getName()}" required class="input-edit">
                </div>

                <div class="form-group">
                    <label>Kategoria</label>
                    <input type="text" name="category" value="{$product->getCategory()}" required class="input-edit">
                </div>

                <div class="form-group">
                    <label>Opis</label>
                    <textarea name="description" required class="input-edit">{$product->getDescription()|escape}</textarea>
                </div>

                {assign var=variant value=$product->getVariants()->first()}
                <div class="form-group">
                    <label>Cena</label>
                    <input type="number" step="0.01" name="price" value="{$variant->getPrice()}" required class="input-edit">
                </div>

                <div class="form-group">
                    <label>Aktualne zdjęcie</label>
                    {assign var=image value=$product->getImages()->first()}
                    {if $image}
                        <img src="/Praktyki-2-master/uploads/{$image->getAlt()}" class="edit-product-image">
                    {else}
                        <img src="/Praktyki-2-master/uploads/default.jpg" class="edit-product-image">
                    {/if}
                </div>

                <div class="form-group">
                    <label>Nowe zdjęcie</label>
                    <input type="file" name="image" class="input-edit">
                </div>

                <button type="submit" class="save-btn">Zapisz zmiany</button>

            </form>

        </div>

        <div class="right-panel">

            <div class="variants-panel">

                <h2>Opcje / Warianty</h2>

                <div class="variant-section">
                    <h3>Kolor</h3>

                    {foreach $variantImages as $v}
                        <label class="color-option">
                            <input type="radio" name="color" value="{$v->getColor()}" data-image="{$v->getImage()}">
                            {$v->getColor()}
                        </label>
                    {/foreach}
                </div>

                <div class="variant-section">
                    <h3>Dodatkowe opcje</h3>

                    <label><input type="checkbox" class="addon" data-price="50"> LED (+50 zł)</label><br>
                    <label><input type="checkbox" class="addon" data-price="30"> Organizer (+30 zł)</label><br>
                    <label><input type="checkbox" class="addon" data-price="40"> Półka (+40 zł)</label>
                </div>

                <div class="variant-preview">

                    {assign var=mainImage value=$product->getImages()->first()}
                    {if $mainImage}
                        {assign var=previewImage value=$mainImage->getAlt()}
                    {else}
                        {assign var=previewImage value="default.jpg"}
                    {/if}

                    <img id="previewImage" src="/Praktyki-2-master/uploads/{$previewImage}" class="variant-preview-img">

                    <p id="selectedColor">Kolor: Domyślny</p>
                    <p id="selectedAddons">Dodatki: Brak</p>

                    <p id="totalPrice">Cena: {$variant->getPrice()} zł</p>

                </div>

                <h3>Dodaj zdjęcie wariantu</h3>

                <form method="POST" action="/Praktyki-2-master/?page=products/addVariantImage&id={$product->getId()}" enctype="multipart/form-data">

                    <label>Kolor</label>
                    <input type="text" name="color" class="input-edit" placeholder="np. Biały" required>

                    <label>Zdjęcie</label>
                    <input type="file" name="image" required>

                    <button type="submit" class="add-option-btn">Dodaj wariant</button>

                </form>

            </div>

        </div>

    </div>

    <script>
        const basePrice = parseFloat(document.getElementById("totalPrice").innerText.match(/\d+/)[0]);

        const previewImage = document.getElementById("previewImage");
        const selectedColor = document.getElementById("selectedColor");
        const selectedAddons = document.getElementById("selectedAddons");
        const totalPriceEl = document.getElementById("totalPrice");

        document.querySelectorAll('input[name="color"]').forEach(radio => {
            radio.addEventListener("change", function() {
                const image = this.dataset.image;
                const color = this.value;
                previewImage.src = "/Praktyki-2-master/uploads/" + image;
                selectedColor.innerText = "Kolor: " + color;
            });
        });

        document.querySelectorAll(".addon").forEach(chk => {
            chk.addEventListener("change", updateSummary);
        });

        function updateSummary() {
            let addons = [];
            let extraPrice = 0;

            document.querySelectorAll(".addon:checked").forEach(a => {
                addons.push(a.parentElement.innerText.trim());
                extraPrice += parseFloat(a.dataset.price);
            });

            selectedAddons.innerText = addons.length > 0 ?
                "Dodatki: " + addons.join(", ") :
                "Dodatki: Brak";

            totalPriceEl.innerText = "Cena: " + (basePrice + extraPrice) + " zł";
        }
    </script>

{/block}