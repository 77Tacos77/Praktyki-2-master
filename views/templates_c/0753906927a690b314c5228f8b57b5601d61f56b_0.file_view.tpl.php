<?php
/* Smarty version 5.8.0, created on 2026-05-28 12:14:34
  from 'file:pages/products/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a18158ac404e6_19260126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0753906927a690b314c5228f8b57b5601d61f56b' => 
    array (
      0 => 'pages/products/view.tpl',
      1 => 1779963274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a18158ac404e6_19260126 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12565025246a18158ac226c5_05922044', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_12565025246a18158ac226c5_05922044 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
?>


<div class="product-page">

    <!-- GŁÓWNA ZAWARTOŚĆ -->
    <div class="product-wrapper">

        <!-- LEWA STRONA -->
        <div class="product-image">
            <?php if ($_smarty_tpl->getValue('product')->getImages() && $_smarty_tpl->getValue('product')->getImages()->first()) {?>
                <img id="mainProductImage"
                     src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('product')->getImages()->first()->getAlt();?>
"
                     width="400">
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

            <h3>Wybierz wariant:</h3>

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

                            <input type="radio"
                                   name="variant_id"
                                   value="<?php echo $_smarty_tpl->getValue('variant')->getId();?>
"
                                   data-image="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('variant')->getImage();?>
"
                                   required>

                            <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('variant')->getImage();?>
">

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

    <!-- SIDEBAR -->
    <div class="product-sidebar">

        <h3>Polecane produkty</h3>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('otherProducts'), 'p');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach1DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('p')->getId() != $_smarty_tpl->getValue('product')->getId()) {?>

                <a href="/Praktyki-2-master/?page=product/view&id=<?php echo $_smarty_tpl->getValue('p')->getId();?>
" class="sidebar-item">

                    <?php if ($_smarty_tpl->getValue('p')->getImages() && $_smarty_tpl->getValue('p')->getImages()->first()) {?>
                        <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('p')->getImages()->first()->getAlt();?>
">
                    <?php }?>

                    <div class="sidebar-name">
                        <?php echo $_smarty_tpl->getValue('p')->getName();?>

                    </div>

                </a>

            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </div>

</div>

<!-- JS -->
<?php echo '<script'; ?>
>
    const radios = document.querySelectorAll('input[name="variant_id"]');
    const mainImage = document.getElementById('mainProductImage');

    radios.forEach(radio => {
        radio.addEventListener('change', function () {
            const newImage = this.dataset.image;

            if (newImage) {
                mainImage.style.opacity = 0;

                setTimeout(() => {
                    mainImage.src = newImage;
                    mainImage.style.opacity = 1;
                }, 150);
            }
        });
    });

    if (radios.length > 0) {
        radios[0].checked = true;
        radios[0].dispatchEvent(new Event('change'));
    }
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
