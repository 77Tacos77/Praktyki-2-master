{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="containermain">
        <h1>Edytuj produkt</h1>
                <hr>

        <form action="/Praktyki-2-master/?page=products/store" method="POST">

            <input type="hidden" name="id" value="{$product->getId()}">

            <label>Nazwa produktu</label>
            <input type="text" name="name" value="{$product->getName()}" required>

            <label>Opis</label>
            <textarea name="description" required>{$product->getDescription()}
        </textarea>

            <button type="submit">
                Zapisz
            </button></a>

            <a href="/Praktyki-2-master/?page=products" class="btn btn-secondary">
                Powrót
            </a>

        </form>
    </div>

{/block}