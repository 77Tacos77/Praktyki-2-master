{extends file="layouts/default.tpl"}

{block name="content"}

<div class="login-container">

    <h1>Dodaj adres</h1>

    <form method="POST">

        <input type="text" name="title" placeholder="Nazwa">

        <input type="text" name="url" placeholder="Link">

        <textarea name="description" placeholder="Opis"></textarea>

        <div class="button-group">
            <button type="submit" class="submit">
                Dodaj
            </button>
        </div>

    </form>

</div>

{/block}