{extends file="layouts/default.tpl"}

{block name="content"}

<div class="login-container">

    <h1>Rejestracja</h1>

    {if isset($error)}
        <p>{$error}</p>
    {/if}

    <form method="POST">

        <input
            type="text"
            name="login"
            placeholder="Login"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Hasło"
            required
        >

        <div class="button-group">

            <button class="submit" type="submit">
                Zarejestruj
            </button>

        </div>

    </form>

</div>

{/block}