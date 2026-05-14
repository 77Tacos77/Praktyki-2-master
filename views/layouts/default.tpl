<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt Mirjan</title>

    <link rel="stylesheet" href="/Praktyki-2-master/style.css?v=1">
    <link rel="icon" type="image/svg+xml" href="icon.svg">
</head>

<body>

<header>
    <nav class="navbar">
        <div class="nav-container">

            <a class="nav-logo" href="/Praktyki-2-master/"">
                Projekt Mirjan
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a class="nav-link" href="/Praktyki-2-master/">Home</a></li>
                <li><a class="nav-link" href="#">About</a></li>
                <li><a class="nav-link" href="/Praktyki-2-master/addresses">Moje adresy</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
                <li><a class="nav-link" href="/Praktyki-2-master/login">Login</a></li>
            </ul>

        </div>
    </nav>
</header>

<main>
    <section class="content">
        <div class="app-output">
            {block name="content"}{/block}
        </div>
    </section>
</main>

<footer>

    <div class="footer-left">
        {if isset($smarty.session.login)}
            Zalogowany jako {$smarty.session.login}
        {else}
            Niezalogowany
        {/if}

        <a href="/Praktyki-2-master/logout" id="out">Wyloguj się</a>
    </div>

    <div class="footer-center">
        Projekt Mirjan  2026
    </div>

</footer>

<script>
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');

    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });
</script>

</body>
</html>