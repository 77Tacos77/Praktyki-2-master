{extends file="layouts/default.tpl"}

{block name="content"}

<div class="login-container">

    <h1>Edytuj adres</h1>

    <form method="POST">

        <input
            type="text"
            name="title"
            value="{$address->getTitle()}"
        >

        <input
            type="text"
            name="url"
            value="{$address->getUrl()}"
        >

        <textarea name="description">{$address->getDescription()}</textarea>

        <div class="button-group">

            <button type="submit" class="submit">
                Zapisz
            </button>

        </div>

    </form>

</div>

{/block}