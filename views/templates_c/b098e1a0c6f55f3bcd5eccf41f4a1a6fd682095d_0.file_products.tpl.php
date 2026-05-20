<?php
/* Smarty version 5.8.0, created on 2026-05-19 13:25:01
  from 'file:products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0c488dc07524_18754365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b098e1a0c6f55f3bcd5eccf41f4a1a6fd682095d' => 
    array (
      0 => 'products.tpl',
      1 => 1779189900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0c488dc07524_18754365 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14510893916a0c488dbfd1f1_11803574', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_14510893916a0c488dbfd1f1_11803574 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<div class="products-header">
    <h1>Produkty</h1>

    <a href="/Praktyki-2-master/products/create" class="btn btn-primary">
         Dodaj produkt
    </a>
</div>

<div class="products-list">
    <?php if ((true && ($_smarty_tpl->hasVariable('products') && null !== ($_smarty_tpl->getValue('products') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products')) > 0) {?>

        <div class="product-grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
                <div class="product-card">
                    <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('product')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('product')['name'];?>
">
                    <h3><?php echo $_smarty_tpl->getValue('product')['name'];?>
</h3>
                    <p class="price"><?php echo $_smarty_tpl->getValue('product')['price'];?>
 zł</p>

                    <div class="actions">
                        <a href="/Praktyki-2-master/products/edit/<?php echo $_smarty_tpl->getValue('product')['id'];?>
" class="btn btn-small">Edytuj</a>
                        <a href="/Praktyki-2-master/products/delete/<?php echo $_smarty_tpl->getValue('product')['id'];?>
" class="btn btn-danger btn-small">Usuń</a>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

    <?php } else { ?>
        <p class="no-products">Brak produktów w bazie.</p>
    <?php }?>
</div>

<?php
}
}
/* {/block "content"} */
}
