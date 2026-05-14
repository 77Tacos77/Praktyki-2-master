{extends file="layouts/default.tpl"}

{block name="content"}

<div class="login-container">

    <h1 class="tytul">Logowanie</h1>

<form action="/Praktyki-2-master/login" method="POST">

        <input type="text" name="login" placeholder="Login">

        <input type="password" name="password" placeholder="Hasło">

        <div class="button-group">
            <button type="submit" class="submit">Zaloguj</button>

            <button type="reset" class="reset">Resetuj</button>
        </div>

    </form>

    <div class="register-text">
        <p>Nie masz konta?</p>

        <a href="/Praktyki-2-master/register" class="reg">
            Zarejestruj się
        </a>
    </div>

</div>

{/block}