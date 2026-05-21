<?php
/* Smarty version 5.8.0, created on 2026-05-21 11:51:00
  from 'file:pages/products/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0ed5845da995_68403776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d96740aa8e5af0eefa69ded72859adfa8f54f6' => 
    array (
      0 => 'pages/products/edit.tpl',
      1 => 1779351869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0ed5845da995_68403776 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9490886656a0ed5845d7901_82206041', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_9490886656a0ed5845d7901_82206041 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
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
