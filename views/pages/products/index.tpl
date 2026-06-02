{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="products-page">
        <h1 class="products-title">Produkty</h1>
        <hr>

        <div class="products-actions">
            <a id="show-delete-mode" class="delete-mode-btn">- Usuń</a>
            <a href="/Praktyki-2-master/?page=products/create" class="add-product-btn">+ Dodaj produkt</a>
        </div>
        
        <hr>

        <form action="/Praktyki-2-master/?page=products-delete-multiple" method="post" id="delete-form" class="delete-product-btn">
        <button type="submit" id="delete-selected" class="delete-selected-btn">
            Usuń zaznaczone
        </button>


            <div class="products-grid">

                {foreach $products as $product}

                    {assign var=image value=$product->getImages()->first()}

                    <a href="/Praktyki-2-master/?page=products/edit&id={$product->getId()}" class="product-card-link">
                        <div class="product-card">

                            <input type="checkbox" name="ids[]" value="{$product->getId()}" class="delete-checkbox" >

                            <div class="product-image">
                                {assign var=image value=$product->getImages()->first()}

                                {if $image}
                                    <img src="/Praktyki-2-master/uploads/{$image->getAlt()}">
                                {else}
                                    <img src="/Praktyki-2-master/uploads/default.jpg">
                                {/if}
                            </div>

                            <div class="product-content">
                                <h2>{$product->getName()}</h2>
                                <p>{$product->getDescription()}</p>

                                {assign var=variant value=$product->getVariants()->first()}
                                {if $variant}
                                    <p class="product-price">Cena: {$variant->getPrice()} zł</p>
                                {else}
                                    <p class="product-price">Brak ceny</p>
                                {/if}
                            </div>


                        </div>
                    </a>

                {/foreach}

            </div>
        </form>
    </div>

<script>
document.querySelectorAll(".color-dot").forEach(dot => {
    dot.addEventListener("click", () => {

        const color = dot.dataset.color;

        document.getElementById("colorFilter").value = color;

        document.getElementById("colorFilter")
            .dispatchEvent(new Event("change"));

        // 🔥 highlight aktywnej
        document.querySelectorAll(".color-dot")
            .forEach(d => d.classList.remove("active"));

        dot.classList.add("active");
    });
</script>
{/block}