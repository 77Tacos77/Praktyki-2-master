<?php
/* Smarty version 5.8.0, created on 2026-05-13 13:35:49
  from 'file:pages/register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a04621519bbf2_71954041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7dba35a0d1e32ca8fdfc7d6683a8608fb66919a' => 
    array (
      0 => 'pages/register.tpl',
      1 => 1778672051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a04621519bbf2_71954041 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_738609386a046215196a60_23613469', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_738609386a046215196a60_23613469 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<div class="login-container">

    <h1>Rejestracja</h1>

    <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {?>
        <p><?php echo $_smarty_tpl->getValue('error');?>
</p>
    <?php }?>

    <form method="POST">

        <input
            type="text"
            name="login"
            placeholder="Login"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Hasło"
            required
        >

        <div class="button-group">

            <button class="submit" type="submit">
                Zarejestruj
            </button>

        </div>

    </form>

</div>

<?php
}
}
/* {/block "content"} */
}
