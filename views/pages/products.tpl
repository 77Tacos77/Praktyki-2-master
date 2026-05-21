{extends file="layouts/default.tpl"} {block name="content"}
    <div class="products-page">
        <div class="products-header">
            <h1>Produkty</h1> <a href="/Praktyki-2-master/?page=products/create" class="add-product-btn"> Dodaj produkt </a>
        </div>
        <div class="products-grid">
            {foreach $products as $product}
                <div class="product-card">
                    <a href="/Praktyki-2-master/?page=products/edit&id={$product->getId()}" class="card-link"></a>

                    <div class="product-image">
                        <img src="/Praktyki-2-master/uploads/default.jpg">
                    </div>

                    <div class="product-content">
                        <h2>{$product->getName()}</h2>
                        <p>{$product->getDescription()}</p>
                    </div>
                </div>


            {/foreach}
        </div>
    </div>
    <script>
        document.querySelector('.delete-selected-btn')?.addEventListener('click', () => {
            document.querySelectorAll('.delete-checkbox').forEach(cb => cb.checked = false);
        });
    </script>

{/block}