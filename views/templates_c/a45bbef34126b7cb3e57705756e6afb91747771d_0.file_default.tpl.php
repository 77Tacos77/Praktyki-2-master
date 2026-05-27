<?php
/* Smarty version 5.8.0, created on 2026-05-27 12:31:43
  from 'file:layouts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a16c80fb7edb5_20991112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45bbef34126b7cb3e57705756e6afb91747771d' => 
    array (
      0 => 'layouts/default.tpl',
      1 => 1779877755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a16c80fb7edb5_20991112 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
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

    <?php if ((true && ($_smarty_tpl->hasVariable('flash') && null !== ($_smarty_tpl->getValue('flash') ?? null)))) {?>

        <div id="flash-toast" class="toast toast-<?php echo (($tmp = $_smarty_tpl->getValue('flash')['type'] ?? null)===null||$tmp==='' ? 'info' ?? null : $tmp);?>
">
            <?php echo (($tmp = $_smarty_tpl->getValue('flash')['message'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('flash') ?? null : $tmp);?>

        </div>

    <?php }?>

    <header>
        <nav class="navbar">
            <div class="nav-container">

                <a href="/Praktyki-2-master/">
                    <img class="nav-logo" src="/Praktyki-2-master/logo.png" alt="Logo">
                </a>

                <ul class="nav-menu" id="navMenu">

                    <li>
                        <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'home') {?>active<?php }?>" href="/Praktyki-2-master/">
                            Home
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="#">
                            About
                        </a>
                    </li>

                    <li>
                        <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'addresses') {?>active<?php }?>" href="/Praktyki-2-master/addresses">
                            Moje adresy
                        </a>
                    </li>

                    <li>
                        <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'products') {?>active<?php }?>" href="/Praktyki-2-master/?page=products">
                            Produkty
                        </a>
                    </li>

                    <li class="nav-cart">
                        <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'cart') {?>active<?php }?>" href="/Praktyki-2-master/?page=cart">

                            Koszyk

                            <?php if ((true && (true && null !== ($_SESSION['cart'] ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_SESSION['cart']) > 0) {?>
                                <span class="nav-cart-count">
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_SESSION['cart']);?>

                                </span>
                            <?php }?>

                        </a>
                    </li>

                    <?php if ((true && (true && null !== ($_SESSION['login'] ?? null)))) {?>
                        <li>
                            <a class="nav-link <?php if ($_smarty_tpl->getValue('currentPage') == 'profile') {?>active<?php }?>" href="/Praktyki-2-master/profile">
                                Moje konto
                            </a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a class="nav-link" href="/Praktyki-2-master/login">
                                Login
                            </a>
                        </li>
                    <?php }?>

                </ul>

            </div>
        </nav>
    </header>

    <main>
        <section class="content">
            <div class="app-output">
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10199141016a16c80fb7dd72_76074329', "content");
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

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        document.addEventListener("DOMContentLoaded", function() {
            const toast = document.getElementById("flash-toast");
            if (toast) {
                setTimeout(() => toast.classList.add("show"), 100);
                setTimeout(() => toast.classList.remove("show"), 3000);
            }
        });
        
setTimeout(() => {
        const toast = document.querySelector(".toast");
        if (toast) {
            toast.style.opacity = "0";
            toast.style.transform = "translateY(-50px)";
        }
    }, 2500);

    <?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block "content"} */
class Block_10199141016a16c80fb7dd72_76074329 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\layouts';
}
}
/* {/block "content"} */
}
