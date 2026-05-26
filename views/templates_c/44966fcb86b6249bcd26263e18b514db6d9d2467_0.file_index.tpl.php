<?php
/* Smarty version 5.8.0, created on 2026-05-25 11:51:04
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a141b8838c1d5_10102548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44966fcb86b6249bcd26263e18b514db6d9d2467' => 
    array (
      0 => 'index.tpl',
      1 => 1779449461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a141b8838c1d5_10102548 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8856867636a141b8835d493_01257107', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_8856867636a141b8835d493_01257107 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


    <div class="products-page">

        <h1 class="products-title">Nasze produkty</h1>

        <div class="products-grid">

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'p');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach0DoElse = false;
?>

                <a href="/Praktyki-2-master/?page=product/view&id=<?php echo $_smarty_tpl->getValue('p')->getId();?>
" class="product-card">

                    <div class="product-image">
                        <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('p')->getImages()->first(), false, NULL);?>

                        <?php if ($_smarty_tpl->getValue('image')) {?>
                            <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getAlt();?>
" alt="Produkt">
                        <?php } else { ?>
                            <img src="/Praktyki-2-master/uploads/default.jpg" alt="Brak zdjęcia">
                        <?php }?>
                    </div>

                    <div class="product-content">
                        <h2><?php echo $_smarty_tpl->getValue('p')->getName();?>
</h2>

                        <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('p')->getVariants()->first(), false, NULL);?>
                        <p class="price"><?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
 zł</p>
                    </div>

                </a>

            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        </div>

    </div>

<?php
}
}
/* {/block "content"} */
}
