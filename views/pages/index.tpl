{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="products-page">

        <h1 class="products-title">Nasze produkty</h1>
        <hr>

        <div class="products-grid">

            {foreach $products as $p}

                <a href="/Praktyki-2-master/?page=product/view&id={$p->getId()}" class="product-card">

                    <div class="product-image">
                        {assign var=image value=$p->getImages()->first()}

                        {if $image}
                            <img src="/Praktyki-2-master/uploads/{$image->getAlt()}" alt="Produkt">
                        {else}
                            <img src="/Praktyki-2-master/uploads/default.jpg" alt="Brak zdjęcia">
                        {/if}
                    </div>

                    <div class="product-content">
                        <h2>{$p->getName()}</h2>

                        {assign var=variant value=$p->getVariants()->first()}
                        <p class="price">{$variant->getPrice()} zł</p>
                    </div>

                </a>

            {/foreach}

        </div>

    </div>

{/block}