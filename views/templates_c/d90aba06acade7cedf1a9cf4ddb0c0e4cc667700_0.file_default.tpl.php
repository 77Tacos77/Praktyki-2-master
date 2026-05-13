<?php
/* Smarty version 5.8.0, created on 2026-05-13 13:29:07
  from 'file:layouts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a046083ba3460_40496634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd90aba06acade7cedf1a9cf4ddb0c0e4cc667700' => 
    array (
      0 => 'layouts/default.tpl',
      1 => 1778671725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a046083ba3460_40496634 (\Smarty\Template $_smarty_tpl) {
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

    <link rel="stylesheet" href="/Praktyki-2-master/style.css?v=1">
    <link rel="icon" type="image/svg+xml" href="icon.svg">
</head>

<body>

<header>
    <nav class="navbar">
        <div class="nav-container">

            <a class="nav-logo" href="/Praktyki-2-master/index.php">
                Projekt Mirjan
            </a>

            <ul class="nav-menu" id="navMenu">
                <li><a class="nav-link" href="#">Home</a></li>
                <li><a class="nav-link" href="#">About</a></li>
                <li><a class="nav-link" href="#">Services</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
                <li><a class="nav-link" href="/Praktyki-2-master/index.php?page=login">Login</a></li>
            </ul>

        </div>
    </nav>
</header>

<main>
    <section class="content">
        <div class="app-output">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10170287646a046083b98429_87471094', "content");
?>

        </div>
    </section>
</main>

<footer>

    <div class="footer-left">
        <?php if ((true && (true && null !== ($_SESSION['login'] ?? null)))) {?>
            Zalogowany jako <?php echo $_SESSION['login'];?>

        <?php } else { ?>
            Niezalogowany
        <?php }?>

        <a href="index.php?page=logout" id="out">Wyloguj się</a>
    </div>

    <div class="footer-center">
        Projekt Mirjan © 2025
    </div>

</footer>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block "content"} */
class Block_10170287646a046083b98429_87471094 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\layouts';
}
}
/* {/block "content"} */
}
