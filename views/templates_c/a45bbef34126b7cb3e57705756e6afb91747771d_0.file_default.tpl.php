<?php
/* Smarty version 5.8.0, created on 2026-06-03 11:36:59
  from 'file:layouts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1ff5bb7637d1_14720925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45bbef34126b7cb3e57705756e6afb91747771d' => 
    array (
      0 => 'layouts/default.tpl',
      1 => 1780479417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1ff5bb7637d1_14720925 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
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

                <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'home') {?>active<?php }?>" href="/Praktyki-2-master/">
                    Home
                </a>

                <a class="nav-link" href="#">
                    About
                </a>

                <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'addresses') {?>active<?php }?>" href="/Praktyki-2-master/addresses">
                    Moje adresy
                </a>

                <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'products') {?>active<?php }?>" href="/Praktyki-2-master/?page=products">
                    Produkty
                </a>

                <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'cart') {?>active<?php }?>" href="/Praktyki-2-master/?page=cart">
                    Koszyk
                    <?php if ((true && (true && null !== ($_SESSION['cart'] ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_SESSION['cart']) > 0) {?>
                        <span class="nav-cart-count">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_SESSION['cart']);?>

                        </span>
                    <?php }?>
                </a>

                <?php if ((true && (true && null !== ($_SESSION['login'] ?? null)))) {?>
                    <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'profile') {?>active<?php }?>" href="/Praktyki-2-master/profile">
                        Moje konto
                    </a>
                <?php } else { ?>
                    <a class="nav-link" href="/Praktyki-2-master/login">
                        Login
                    </a>
                <?php }?>

            </nav>

        </div>
    </header>

    <main>
        <section class="content">
            <div class="app-output">
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13601419276a1ff5bb75f677_08365280', "content");
?>

            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">

            <div class="footer-left">
                Zalogowany jako:
                <span>
                    <?php echo $_SESSION['login'] ?? 'Gość';?>

                </span>
            </div>

            <div class="footer-right">
                <a href="/Praktyki-2-master/?page=logout">
                    Wyloguj
                </a>
            </div>

        </div>
    </footer>

    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        // Sistema toastów z Smarty flashów
        document.addEventListener("DOMContentLoaded", function() {

const flash = <?php echo json_encode((($tmp = $_smarty_tpl->getValue('flash') ?? null)===null||$tmp==='' ? null ?? null : $tmp));?>
;


console.log(flash)

            if (flash) {
                showToast(flash.message, flash.type);
            }
        });

        
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
        
    <?php echo '</script'; ?>
>

    <div id="global-toast"></div>

</body>

</html><?php }
/* {block "content"} */
class Block_13601419276a1ff5bb75f677_08365280 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\layouts';
}
}
/* {/block "content"} */
}
