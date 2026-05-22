<?php
/* Smarty version 5.8.0, created on 2026-05-22 13:43:34
  from 'file:products/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a104166b51067_09937871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6250e0ac44f5e4ce67a78059385414b16525cee8' => 
    array (
      0 => 'products/view.tpl',
      1 => 1779450202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a104166b51067_09937871 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13229057836a104166b43e68_51761369', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_13229057836a104166b43e68_51761369 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
?>


    <div class="product-page">

                <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('product')->getImages()->first(), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('image')) {?>
            <img id="mainImage" src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getAlt();?>
" class="main-product-image">
        <?php } else { ?>
            <img id="mainImage" src="/Praktyki-2-master/uploads/default.jpg" class="main-product-image">
        <?php }?>

                <h1><?php echo $_smarty_tpl->getValue('product')->getName();?>
</h1>

                <p><?php echo $_smarty_tpl->getValue('product')->getDescription();?>
</p>

                <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('product')->getVariants()->first(), false, NULL);?>
        <p id="price">Cena: <?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
 zł</p>

        <h3>Wybierz kolor</h3>

                <div class="variant-gallery">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variantImages'), 'v');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach0DoElse = false;
?>
                <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('v')->getImage();?>
" class="variant-thumb" data-image="<?php echo $_smarty_tpl->getValue('v')->getImage();?>
">
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

    </div>

    <?php echo '<script'; ?>
>
        const mainImage = document.getElementById("mainImage");

        document.querySelectorAll(".variant-thumb").forEach(img => {
            img.addEventListener("click", function() {
                const newImage = this.dataset.image;
                mainImage.src = "/Praktyki-2-master/uploads/" + newImage;
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
