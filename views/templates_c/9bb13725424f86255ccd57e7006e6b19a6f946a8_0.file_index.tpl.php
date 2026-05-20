<?php
/* Smarty version 5.8.0, created on 2026-05-20 13:38:37
  from 'file:pages/products/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d9d3d34a057_07723106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb13725424f86255ccd57e7006e6b19a6f946a8' => 
    array (
      0 => 'pages/products/index.tpl',
      1 => 1779277115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d9d3d34a057_07723106 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18026280776a0d9d3d340c79_05549675', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_18026280776a0d9d3d340c79_05549675 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
?>

    <div class="products-page">
        <h1 class="products-title"> Produkty </h1>
        <hr>
        <a href="/Praktyki-2-master/?page=products/edit" class="edit-product-btn">✎ Edytuj produkt</a>
        <button id="show-delete-mode" class=" delete-product-btn">Usuń</button>
        <a href="/Praktyki-2-master/products/create" class="add-product-btn"> + Dodaj produkt </a>
        <form action="/Praktyki-2-master/?page=products/delete-multiple" method="post" id="delete-form">
            <button type="submit" id="delete-selected" style="display:none;" class="delete-selected-btn">
                Usuń zaznaczone
            </button>
        </form>

        <hr>
        <div class="products-grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?> <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('product')->getVariants()->first(), false, NULL);?> <div class="product-card">
                    <tr>
                        <td>
                            <input type="checkbox" name="ids[]" value="<?php echo '<?'; ?>
= $product->getId() <?php echo '?>'; ?>
" class="delete-checkbox" style="display:none;">
                        </td>
                    </tr>

                    <div class="product-image"> <img src="/Praktyki-2-master/uploads/default.jpg"> </div>
                    <div class="product-content">
                        <h2><?php echo $_smarty_tpl->getValue('product')->getName();?>
</h2>
                        <p><?php echo $_smarty_tpl->getValue('product')->getDescription();?>
</p>
                        <div class="product-bottom"> <span class="price"> <?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
 zł </span> <a href="#" class="show-product"> Zobacz produkt </a> </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        document.getElementById('show-delete-mode').addEventListener('click', function() {
            document.querySelectorAll('.delete-checkbox').forEach(cb => cb.style.display = 'inline-block');
            document.getElementById('delete-selected').style.display = 'inline-block';
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
