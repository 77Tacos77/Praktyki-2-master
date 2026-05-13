<?php
/* Smarty version 5.8.0, created on 2026-05-13 10:50:26
  from 'file:pages/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a043b524918f1_38367532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d7e7ca914de4e8753d3a0dfe96b2309bb38980' => 
    array (
      0 => 'pages/login.tpl',
      1 => 1778662208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a043b524918f1_38367532 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10577943296a043b5248f576_29730124', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_10577943296a043b5248f576_29730124 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<div class="login-container">

    <h1 class="tytul">Logowanie</h1>

    <form method="POST">

        <input type="text" name="login" placeholder="Login">

        <input type="password" name="password" placeholder="Hasło">

        <div class="button-group">
            <button type="submit" class="submit">Zaloguj</button>

            <button type="reset" class="reset">Resetuj</button>
        </div>

    </form>

    <div class="register-text">
        <p>Nie masz konta?</p>

        <a href="/Praktyki-2-master/index.php?page=register" class="reg">
            Zarejestruj się
        </a>
    </div>

</div>

<?php
}
}
/* {/block "content"} */
}
