{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="edit-product-container">

        <h1 class="page-title">Edytuj produkt</h1>
        <hr>

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
                <label>Nowe zdjęcie (opcjonalnie)</label>
                <input type="file" name="image" class="input-edit">
            </div>
                <hr>
            <button type="submit" class="save-btn">Zapisz zmiany</button>

        </form>

    </div>

{/block}