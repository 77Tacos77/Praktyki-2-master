<?php
/* Smarty version 5.8.0, created on 2026-05-14 13:27:54
  from 'file:layouts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05b1ba5a32e2_03971081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd90aba06acade7cedf1a9cf4ddb0c0e4cc667700' => 
    array (
      0 => 'layouts/default.tpl',
      1 => 1778758072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a05b1ba5a32e2_03971081 (\Smarty\Template $_smarty_tpl) {
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
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5148736606a05b1ba59bdf3_18011375', "content");
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
class Block_5148736606a05b1ba59bdf3_18011375 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\layouts';
}
}
/* {/block "content"} */
}
