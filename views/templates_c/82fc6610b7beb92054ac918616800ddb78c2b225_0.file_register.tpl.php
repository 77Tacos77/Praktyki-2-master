<?php
/* Smarty version 5.8.0, created on 2026-05-28 08:04:30
  from 'file:pages/register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a17daee9af769_01289577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82fc6610b7beb92054ac918616800ddb78c2b225' => 
    array (
      0 => 'pages/register.tpl',
      1 => 1779877755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a17daee9af769_01289577 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18506078696a17daee9a3b19_40906096', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_18506078696a17daee9a3b19_40906096 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
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
