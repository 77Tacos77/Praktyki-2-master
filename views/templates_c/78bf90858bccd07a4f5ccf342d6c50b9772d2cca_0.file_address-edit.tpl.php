<?php
/* Smarty version 5.8.0, created on 2026-05-14 12:39:36
  from 'file:pages/address-edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05a668121035_83297104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78bf90858bccd07a4f5ccf342d6c50b9772d2cca' => 
    array (
      0 => 'pages/address-edit.tpl',
      1 => 1778755171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a05a668121035_83297104 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16658749756a05a66811de86_69465643', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_16658749756a05a66811de86_69465643 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<div class="login-container">

    <h1>Edytuj adres</h1>

    <form method="POST">

        <input
            type="text"
            name="title"
            value="<?php echo $_smarty_tpl->getValue('address')->getTitle();?>
"
        >

        <input
            type="text"
            name="url"
            value="<?php echo $_smarty_tpl->getValue('address')->getUrl();?>
"
        >

        <textarea name="description"><?php echo $_smarty_tpl->getValue('address')->getDescription();?>
</textarea>

        <div class="button-group">

            <button type="submit" class="submit">
                Zapisz
            </button>

        </div>

    </form>

</div>

<?php
}
}
/* {/block "content"} */
}
