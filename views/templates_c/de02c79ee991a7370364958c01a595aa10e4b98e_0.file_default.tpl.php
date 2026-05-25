<?php
/* Smarty version 5.8.0, created on 2026-05-25 10:35:50
  from 'file:layouts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1409e6773a03_91925557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de02c79ee991a7370364958c01a595aa10e4b98e' => 
    array (
      0 => 'layouts/default.tpl',
      1 => 1779698149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1409e6773a03_91925557 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\layouts';
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

        <?php if (is_array($_smarty_tpl->getValue('flash'))) {?>

            <div id="flash-toast" class="toast toast-<?php echo $_smarty_tpl->getValue('flash')['type'];?>
">

                <?php echo $_smarty_tpl->getValue('flash')['message'];?>


            </div>

        <?php } else { ?>

            <div id="flash-toast" class="toast toast-info">

                <?php echo $_smarty_tpl->getValue('flash');?>


            </div>

        <?php }?>

    <?php }?>
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
                    <li><a class="nav-link" href="/Praktyki-2-master/?page=products">Produkty</a></li>
                    <li>
                        <a href="/Praktyki-2-master/?page=cart">
                            Koszyk
                            (
                            <?php echo '<?php'; ?>
 echo count($_SESSION['cart'] ?? []); <?php echo '?>'; ?>
)
                        </a>
                    </li>

                    <?php if ((true && (true && null !== ($_SESSION['login'] ?? null)))) {?>
                        <li>
                            <a class="nav-link" href="/Praktyki-2-master/profile">
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18589647326a1409e6770925_33379885', "content");
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
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        if (hamburger) {
            hamburger.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                hamburger.classList.toggle('active');
            });
        }

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger?.classList.remove('active');
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
    <?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block "content"} */
class Block_18589647326a1409e6770925_33379885 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\layouts';
}
}
/* {/block "content"} */
}
