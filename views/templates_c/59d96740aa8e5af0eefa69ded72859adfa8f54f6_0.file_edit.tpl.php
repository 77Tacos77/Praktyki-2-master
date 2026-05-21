<?php
/* Smarty version 5.8.0, created on 2026-05-21 13:20:10
  from 'file:pages/products/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0eea6aa5e183_01088219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d96740aa8e5af0eefa69ded72859adfa8f54f6' => 
    array (
      0 => 'pages/products/edit.tpl',
      1 => 1779362408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0eea6aa5e183_01088219 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9618559446a0eea6aa53dd2_85679769', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_9618559446a0eea6aa53dd2_85679769 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
?>


    <div class="edit-product-container">

        <h1 class="page-title">Edytuj produkt</h1>
        <hr>

        <form method="POST" action="/Praktyki-2-master/?page=products/update&id=<?php echo $_smarty_tpl->getValue('product')->getId();?>
" enctype="multipart/form-data" class="edit-product-form">

            <div class="form-group">
                <label>Nazwa produktu</label>
                <input type="text" name="name" value="<?php echo $_smarty_tpl->getValue('product')->getName();?>
" required class="input-edit">
            </div>

            <div class="form-group">
                <label>Kategoria</label>
                <input type="text" name="category" value="<?php echo $_smarty_tpl->getValue('product')->getCategory();?>
" required class="input-edit">
            </div>

            <div class="form-group">
                <label>Opis</label>
                <textarea name="description" required class="input-edit"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('product')->getDescription(), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>

            <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('product')->getVariants()->first(), false, NULL);?>
            <div class="form-group">
                <label>Cena</label>
                <input type="number" step="0.01" name="price" value="<?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
" required class="input-edit">
            </div>

            <div class="form-group">
                <label>Aktualne zdjęcie</label>
                <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('product')->getImages()->first(), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('image')) {?>
                    <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getAlt();?>
" class="edit-product-image">
                <?php } else { ?>
                    <img src="/Praktyki-2-master/uploads/default.jpg" class="edit-product-image">
                <?php }?>
            </div>

            <div class="form-group">
                <label>Nowe zdjęcie (opcjonalnie)</label>
                <input type="file" name="image" class="input-edit">
            </div>
                <hr>
            <button type="submit" class="save-btn">Zapisz zmiany</button>

        </form>

    </div>

<?php
}
}
/* {/block "content"} */
}
