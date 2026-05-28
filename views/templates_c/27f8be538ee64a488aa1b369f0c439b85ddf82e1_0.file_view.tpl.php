<?php
/* Smarty version 5.8.0, created on 2026-05-28 10:30:08
  from 'file:products/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a17fd1038c513_03989651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f8be538ee64a488aa1b369f0c439b85ddf82e1' => 
    array (
      0 => 'products/view.tpl',
      1 => 1779956967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a17fd1038c513_03989651 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1214388546a17fd1037f8d5_52552441', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1214388546a17fd1037f8d5_52552441 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
?>


    <div class="product-wrapper">

        <!-- LEWA STRONA -->
        <div class="product-image">
            <?php if ($_smarty_tpl->getValue('product')->getImages() && $_smarty_tpl->getValue('product')->getImages()->first()) {?>
                <img id="mainImage" src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('product')->getImages()->first()->getAlt();?>
" width="400">
            <?php }?>
        </div>

        <!-- PRAWA STRONA -->
        <div class="product-info">

            <h1><?php echo $_smarty_tpl->getValue('product')->getName();?>
</h1>
            <p><?php echo $_smarty_tpl->getValue('product')->getDescription();?>
</p>

            <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('product')->getVariants()->first(), false, NULL);?>
            <h2><?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
 zł</h2>

            <h3>Wybierz kolor:</h3>

            <form method="POST" action="/Praktyki-2-master/?page=cart/add">

                <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->getValue('product')->getId();?>
">

                <div class="variant-container">

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variantImages'), 'variant');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach0DoElse = false;
?>

                        <label class="variant-box">

                            <input type="radio" name="variant_id" value="<?php echo $_smarty_tpl->getValue('variant')->getId();?>
" required>

                            <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('variant')->getImage();?>
" width="80">

                            <div><?php echo $_smarty_tpl->getValue('variant')->getColor();?>
</div>

                        </label>

                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                </div>

                <button class="buy-btn">Dodaj do koszyka</button>

            </form>

        </div>

    </div>

<?php
}
}
/* {/block "content"} */
}
