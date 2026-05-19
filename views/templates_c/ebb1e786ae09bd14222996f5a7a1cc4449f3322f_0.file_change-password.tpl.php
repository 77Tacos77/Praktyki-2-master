<?php
/* Smarty version 5.8.0, created on 2026-05-19 09:07:38
  from 'file:pages/change-password.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0c0c3ae40425_83105559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb1e786ae09bd14222996f5a7a1cc4449f3322f' => 
    array (
      0 => 'pages/change-password.tpl',
      1 => 1779174443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0c0c3ae40425_83105559 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13010201536a0c0c3ae3bd18_20730639', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_13010201536a0c0c3ae3bd18_20730639 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>

    <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {?>
        <div class="toast toast-error"> <?php echo $_smarty_tpl->getValue('error');?>
 </div>
    <?php }?>
    <?php if ((true && ($_smarty_tpl->hasVariable('success') && null !== ($_smarty_tpl->getValue('success') ?? null)))) {?>
        <div class="toast toast-success"> <?php echo $_smarty_tpl->getValue('success');?>
 </div>
    <?php }?>
    <div class="login-container">
        <h1>Zmień hasło</h1>
        <form method="POST"> <label>Login</label> <input type="text" name="login"> <label>Aktualne hasło</label> <input type="password" name="currentPassword"> <label>Nowe hasło</label> <input type="password" name="newPassword"> <label>Powtórz nowe hasło</label> <input type="password" name="repeatPassword">
            <div class="button-group"> <button type="submit" class="submit"> Zmień hasło </button> </div>
        </form>
    </div>
    <?php echo '<script'; ?>
>
        setTimeout(() => { const toast = document.querySelector('.toast'); if (toast) { toast.style.opacity = '0';
                setTimeout(() => { toast.remove(); }, 500); } }, 3000);
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
