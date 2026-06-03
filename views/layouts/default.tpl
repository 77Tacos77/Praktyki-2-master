<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Projekt Mirjan</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Praktyki-2-master/style.css?v=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="icon.svg">
</head>

<body>

    <div class="stars"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="shooting-star"></div>
    <div class="stars"></div>

    <header>
        <div class="nav-container">

            <a href="/Praktyki-2-master/">
                <img class="nav-logo" src="/Praktyki-2-master/logo.png">
            </a>

            <button class="nav-toggle" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="nav-menu" id="navMenu">

                <a class="nav-link {if $currentPage == 'home'}active{/if}" href="/Praktyki-2-master/">
                    Home
                </a>

                <a class="nav-link" href="#">
                    About
                </a>

                <a class="nav-link {if $currentPage == 'addresses'}active{/if}" href="/Praktyki-2-master/addresses">
                    Moje adresy
                </a>

                <a class="nav-link {if $currentPage == 'products'}active{/if}" href="/Praktyki-2-master/?page=products">
                    Produkty
                </a>

                <a class="nav-link {if $currentPage == 'cart'}active{/if}" href="/Praktyki-2-master/?page=cart">
                    Koszyk
                    {if isset($smarty.session.cart) && $smarty.session.cart|@count > 0}
                        <span class="nav-cart-count">
                            {$smarty.session.cart|@count}
                        </span>
                    {/if}
                </a>

                {if isset($smarty.session.login)}
                    <a class="nav-link {if $currentPage == 'profile'}active{/if}" href="/Praktyki-2-master/profile">
                        Moje konto
                    </a>
                {else}
                    <a class="nav-link" href="/Praktyki-2-master/login">
                        Login
                    </a>
                {/if}

            </nav>

        </div>
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
        const navMenu = document.getElementById('navMenu');
        const navToggle = document.querySelector('.nav-toggle');

        navToggle?.addEventListener('click', () => {
            const isOpen = navMenu.classList.toggle('active');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                navToggle?.setAttribute('aria-expanded', 'false');
            });
        });
    </script>

    <script>
        // Sistema toastów z Smarty flashów
        document.addEventListener("DOMContentLoaded", function() {

const flash = {$flash|default:null|json_encode nofilter};


console.log(flash)

            if (flash) {
                showToast(flash.message, flash.type);
            }
        });

        {literal}
            function showToast(message, type = 'success') {
                const toastBox = document.getElementById('global-toast');

                const toast = document.createElement('div');
                toast.className = `toast-box toast-${type} show`;
                toast.textContent = message;

                toastBox.appendChild(toast);

                // Animacja pojawiania się
                setTimeout(() => {
                    toast.style.opacity = '1';
                }, 10);

                // Ukrycie po 3 sekundach
                setTimeout(() => {
                    toast.classList.remove('show');
                    setTimeout(() => {
                        toast.remove();
                    }, 300);
                }, 3000);
            }
        {/literal}
    </script>

    <div id="global-toast"></div>

</body>

</html>