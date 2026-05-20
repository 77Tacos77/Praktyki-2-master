<?php
/* Smarty version 5.8.0, created on 2026-05-20 08:09:32
  from 'file:pages/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d501c20ab23_43147121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5158aa2a42aa0cc178b94742d9c952e8532c0f1' => 
    array (
      0 => 'pages/login.tpl',
      1 => 1778742600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d501c20ab23_43147121 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5132761556a0d501c2040f0_96228628', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_5132761556a0d501c2040f0_96228628 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<div class="login-container">

    <h1 class="tytul">Logowanie</h1>

<form action="/Praktyki-2-master/login" method="POST">

        <input type="text" name="login" placeholder="Login">

        <input type="password" name="password" placeholder="Hasło">

        <div class="button-group">
            <button type="submit" class="submit">Zaloguj</button>

            <button type="reset" class="reset">Resetuj</button>
        </div>

    </form>

    <div class="register-text">
        <p>Nie masz konta?</p>

        <a href="/Praktyki-2-master/register" class="reg">
            Zarejestruj się
        </a>
    </div>

</div>

<?php
}
}
/* {/block "content"} */
}
