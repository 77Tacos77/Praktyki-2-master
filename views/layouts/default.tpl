<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt Mirjan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Praktyki-2-master/style.css?v=1">
    <link rel="icon" type="image/svg+xml" href="icon.svg">
    
</head>

<body>
{if isset($flash)}
<div id="flash-toast" class="toast toast-{$flash.type}">
    {$flash.message}
</div>
{/if}


    <header>
        <nav class="navbar">
            <div class="nav-container">

                <a href="/Praktyki-2-master/">
                    <img class="nav-logo" src="/Praktyki-2-master/logo.png" alt="Logo">
                </a>

                <ul class="nav-menu" id="navMenu">
                    <li><a class="nav-link" href="/Praktyki-2-master/">Home</a></li>
                    <li><a class="nav-link" href="#">About</a></li>
                    <li><a class="nav-link" href="/Praktyki-2-master/addresses">Moje adresy</a></li>
                    <li><a class="nav-link" href="#">Contact</a></li>
                    {if isset($smarty.session.login)}

                        <li>
                            <a class="nav-link" href="/Praktyki-2-master/profile">
                                Moje konto
                            </a>
                        </li>

                    {else}

                        <li>
                            <a class="nav-link" href="/Praktyki-2-master/login">
                                Login
                            </a>
                        </li>

                    {/if}

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

    <footer class="footer">

        <div class="footer-content">

            <div class="footer-left">

                Zalogowany jako:
                <span>
                    {$smarty.session.login ?? 'Gość'}
                </span>

            </div>

            <div class="footer-right">

                <a href="/Praktyki-2-master/?page=logout">
                    Wyloguj
                </a>

            </div>

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
<script>
document.addEventListener("DOMContentLoaded", function() {
    const toast = document.getElementById("flash-toast");
    if (toast) {
        setTimeout(() => toast.classList.add("show"), 100);
        setTimeout(() => toast.classList.remove("show"), 3000);
    }
});
</script>

</body>
</html>