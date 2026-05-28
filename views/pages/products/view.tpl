{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="product-wrapper">

        <!-- LEWA STRONA -->
        <div class="product-image">
            {if $product->getImages() && $product->getImages()->first()}
                <img id="mainImage" src="/Praktyki-2-master/uploads/{$product->getImages()->first()->getAlt()}" width="400">
            {/if}
        </div>

        <!-- PRAWA STRONA -->
        <div class="product-info">

            <h1>{$product->getName()}</h1>
            <p>{$product->getDescription()}</p>

            {assign var=variant value=$product->getVariants()->first()}
            <h2>{$variant->getPrice()} zł</h2>

            <h3>Wybierz kolor:</h3>

            <form method="POST" action="/Praktyki-2-master/?page=cart/add">

                <input type="hidden" name="product_id" value="{$product->getId()}">

                <div class="variant-container">

                    {foreach $variantImages as $variant}

                        <label class="variant-box">

                            <input type="radio" name="variant_id" value="{$variant->getId()}" required>

                            <img src="/Praktyki-2-master/uploads/{$variant->getImage()}" width="80">

                            <div>{$variant->getColor()}</div>

                        </label>

                    {/foreach}

                </div>

                <button class="buy-btn">Dodaj do koszyka</button>

            </form>

        </div>

    </div>

{/block}