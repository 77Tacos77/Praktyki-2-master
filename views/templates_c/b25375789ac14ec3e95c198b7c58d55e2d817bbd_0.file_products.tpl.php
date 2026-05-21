<?php
/* Smarty version 5.8.0, created on 2026-05-21 09:47:17
  from 'file:pages/products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0eb88584ab12_27291712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b25375789ac14ec3e95c198b7c58d55e2d817bbd' => 
    array (
      0 => 'pages/products.tpl',
      1 => 1779348426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0eb88584ab12_27291712 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_625065666a0eb885843bd6_30556633', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_625065666a0eb885843bd6_30556633 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>

    <div class="products-page">
        <div class="products-header">
            <h1>Produkty</h1> <a href="/Praktyki-2-master/?page=products/create" class="add-product-btn"> Dodaj produkt </a>
        </div>
        <div class="products-grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
                <div class="product-card">
                    <a href="/Praktyki-2-master/?page=products/edit&id=<?php echo $_smarty_tpl->getValue('product')->getId();?>
" class="card-link"></a>

                    <div class="product-image">
                        <img src="/Praktyki-2-master/uploads/default.jpg">
                    </div>

                    <div class="product-content">
                        <h2><?php echo $_smarty_tpl->getValue('product')->getName();?>
</h2>
                        <p><?php echo $_smarty_tpl->getValue('product')->getDescription();?>
</p>
                    </div>
                </div>


            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        document.querySelector('.delete-selected-btn')?.addEventListener('click', () => {
            document.querySelectorAll('.delete-checkbox').forEach(cb => cb.checked = false);
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
