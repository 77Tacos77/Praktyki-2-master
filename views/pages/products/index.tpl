{extends file="layouts/default.tpl"} {block name="content"}
    <div class="products-page">
        <h1 class="products-title"> Produkty </h1>
        <hr>
        <a href="/Praktyki-2-master/?page=products/edit" class="edit-product-btn">✎ Edytuj produkt</a>
        <button id="show-delete-mode" class=" delete-product-btn">Usuń</button>
        <a href="/Praktyki-2-master/products/create" class="add-product-btn"> + Dodaj produkt </a>
        <form action="/Praktyki-2-master/?page=products/delete-multiple" method="post" id="delete-form">
            <button type="submit" id="delete-selected" style="display:none;" class="delete-selected-btn">
                Usuń zaznaczone
            </button>
        </form>

        <hr>
        <div class="products-grid">
            {foreach $products as $product} {assign var=variant value=$product->getVariants()->first()} <div class="product-card">
                    <tr>
                        <td>
                            <input type="checkbox" name="ids[]" value="<?= $product->getId() ?>" class="delete-checkbox" style="display:none;">
                        </td>
                    </tr>

                    <div class="product-image"> <img src="/Praktyki-2-master/uploads/default.jpg"> </div>
                    <div class="product-content">
                        <h2>{$product->getName()}</h2>
                        <p>{$product->getDescription()}</p>
                        <div class="product-bottom"> <span class="price"> {$variant->getPrice()} zł </span> <a href="#" class="show-product"> Zobacz produkt </a> </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <script>
        document.getElementById('show-delete-mode').addEventListener('click', function() {
            document.querySelectorAll('.delete-checkbox').forEach(cb => cb.style.display = 'inline-block');
            document.getElementById('delete-selected').style.display = 'inline-block';
        });
    </script>
{/block}