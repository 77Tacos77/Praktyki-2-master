<?php
/* Smarty version 5.8.0, created on 2026-06-02 11:31:53
  from 'file:pages/change-password.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1ea309ef02f1_92689115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fc7479699b12797884efde6fde9c41a678b164' => 
    array (
      0 => 'pages/change-password.tpl',
      1 => 1779877755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1ea309ef02f1_92689115 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5216046526a1ea309ee7495_20250307', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_5216046526a1ea309ee7495_20250307 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
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
