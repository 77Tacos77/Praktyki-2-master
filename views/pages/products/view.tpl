{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="product-wrapper">

        <div class="left-side">

            {* GŁÓWNE ZDJĘCIE *}
            {assign var=image value=$product->getImages()->first()}

            {if $image}
                <img id="mainImage" src="/Praktyki-2-master/uploads/{$image->getAlt()}" class="main-product-image">
            {else}
                <img id="mainImage" src="/Praktyki-2-master/uploads/default.jpg" class="main-product-image">
            {/if}
        </div>
        {* MINIATURKI *}


        <div class="right-side">

            <h1 class="product-title">
                {$product->getName()}
            </h1>

            <p class="product-description">
                {$product->getDescription()}
            </p>

            {assign var=variant value=$product->getVariants()->first()}

            <div class="price-box">
                {$variant->getPrice()} zł
            </div>

            <div class="variant-section">

                <h3>Wybierz kolor</h3>

                <div class="variant-gallery">

                    {foreach $variantImages as $v}

                        <img src="/Praktyki-2-master/uploads/{$v->getImage()}" class="variant-thumb" data-image="{$v->getImage()}" data-variant="{$v->getId()}">

                    {/foreach}

                </div>

            </div>

            <form method="POST" action="/Praktyki-2-master/?page=cart/add">

                <input type="hidden" name="product_id" value="{$product->getId()}">

                <input type="hidden" id="selectedVariant" name="variant_id" value="{$variant->getId()}">

                <button type="submit" class="buy-btn">

                    Dodaj do koszyka

                </button>

            </form>

        </div>

    </div>

    <script>
        const mainImage = document.getElementById("mainImage");
        const variantInput = document.getElementById("selectedVariant");

        document.querySelectorAll(".variant-thumb").forEach(img => {

            img.addEventListener("click", function() {

                const newImage = this.dataset.image;
                const variantId = this.dataset.variant;

                mainImage.src = "/Praktyki-2-master/uploads/" + newImage;
                variantInput.value = variantId;

            });

        });
    </script>


{/block}