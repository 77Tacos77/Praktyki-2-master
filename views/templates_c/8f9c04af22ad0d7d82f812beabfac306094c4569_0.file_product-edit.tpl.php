<?php
/* Smarty version 5.8.0, created on 2026-05-21 10:24:35
  from 'file:pages/product-edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0ec1435b3eb4_56663644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f9c04af22ad0d7d82f812beabfac306094c4569' => 
    array (
      0 => 'pages/product-edit.tpl',
      1 => 1779351869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0ec1435b3eb4_56663644 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6792726796a0ec1435b0d02_75101365', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_6792726796a0ec1435b0d02_75101365 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


    <div class="containermain">
        <h1>Edytuj produkt</h1>
                <hr>

        <form action="/Praktyki-2-master/?page=products/store" method="POST">

            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('product')->getId();?>
">

            <label>Nazwa produktu</label>
            <input type="text" name="name" value="<?php echo $_smarty_tpl->getValue('product')->getName();?>
" required>

            <label>Opis</label>
            <textarea name="description" required><?php echo $_smarty_tpl->getValue('product')->getDescription();?>

        </textarea>

            <button type="submit">
                Zapisz
            </button></a>

            <a href="/Praktyki-2-master/?page=products" class="btn btn-secondary">
                Powrót
            </a>

        </form>
    </div>

<?php
}
}
/* {/block "content"} */
}
