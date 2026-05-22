{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="product-page">

        {* GŁÓWNE ZDJĘCIE *}
        {assign var=image value=$product->getImages()->first()}

        {if $image}
            <img id="mainImage" src="/Praktyki-2-master/uploads/{$image->getAlt()}" class="main-product-image">
        {else}
            <img id="mainImage" src="/Praktyki-2-master/uploads/default.jpg" class="main-product-image">
        {/if}

        {* NAZWA *}
        <h1>{$product->getName()}</h1>

        {* OPIS *}
        <p>{$product->getDescription()}</p>

        {* CENA *}
        {assign var=variant value=$product->getVariants()->first()}
        <p id="price">Cena: {$variant->getPrice()} zł</p>

        <h3>Wybierz kolor</h3>

        {* WARIANTY *}
        <div class="variant-gallery">
            {foreach $variantImages as $v}
                <img src="/Praktyki-2-master/uploads/{$v->getImage()}" class="variant-thumb" data-image="{$v->getImage()}">
            {/foreach}
        </div>

    </div>

    <script>
        const mainImage = document.getElementById("mainImage");

        document.querySelectorAll(".variant-thumb").forEach(img => {
            img.addEventListener("click", function() {
                const newImage = this.dataset.image;
                mainImage.src = "/Praktyki-2-master/uploads/" + newImage;
            });
        });
    </script>

{/block}