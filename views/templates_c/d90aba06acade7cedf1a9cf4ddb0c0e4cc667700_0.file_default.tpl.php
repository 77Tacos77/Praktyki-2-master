<?php
/* Smarty version 5.8.0, created on 2026-05-13 08:55:56
  from 'file:layouts/default.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a04207c433f73_28765504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd90aba06acade7cedf1a9cf4ddb0c0e4cc667700' => 
    array (
      0 => 'layouts/default.tpl',
      1 => 1778655356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a04207c433f73_28765504 (\Smarty\Template $_smarty_tpl) {
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
<link rel="stylesheet" href="/Praktyki-2-master/style.css?v=1">    <link rel="icon" type="image/svg+xml" href="icon.svg">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <a class="nav-logo" href="#">Projekt Mirjan</a>
                <ul class="nav-menu" id="navMenu">
                    <li><a class="nav-link" href="#">Home</a></li>
                    <li><a class="nav-link" href="#">About</a></li>
                    <li><a class="nav-link" href="#">Services</a></li>
                    <li><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="content">
            <div class="app-output">
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_385320826a04207c42f689_65988367', "content");
?>

            </div>
        </section>
    </main>

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
class Block_385320826a04207c42f689_65988367 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\layouts';
}
}
/* {/block "content"} */
}
