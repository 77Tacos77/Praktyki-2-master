<?php
/* Smarty version 5.8.0, created on 2026-05-26 09:42:22
  from 'file:products/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a154edef0fda7_96686554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6250e0ac44f5e4ce67a78059385414b16525cee8' => 
    array (
      0 => 'products/view.tpl',
      1 => 1779781337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a154edef0fda7_96686554 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6539816306a154edef03c15_13310337', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_6539816306a154edef03c15_13310337 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
?>


    <div class="product-wrapper">

        <div class="left-side">
            <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('product')->getImages()->first(), false, NULL);?>

            <?php if ($_smarty_tpl->getValue('image')) {?>
                <img id="mainImage" src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getAlt();?>
" class="main-product-image">
            <?php } else { ?>
                <img id="mainImage" src="/Praktyki-2-master/uploads/default.jpg" class="main-product-image">
            <?php }?>
        </div>

        <div class="right-side">

            <h1 class="product-title">
                <?php echo $_smarty_tpl->getValue('product')->getName();?>

            </h1>

            <p class="product-description">
                <?php echo $_smarty_tpl->getValue('product')->getDescription();?>

            </p>

            <div class="price-box">
                <?php echo $_smarty_tpl->getValue('productVariant')->getPrice();?>
 zł
            </div>

            <div class="variant-section">
                <h3>Wybierz kolor: </h3>

                <div class="variant-gallery">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variantImages'), 'v');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach0DoElse = false;
?>
                        <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('v')->getImage();?>
" class="variant-thumb" data-image="<?php echo $_smarty_tpl->getValue('v')->getImage();?>
" data-variant="<?php echo $_smarty_tpl->getValue('v')->getId();?>
">
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>

            <form method="POST" action="/Praktyki-2-master/?page=cart/add">
                <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->getValue('product')->getId();?>
">
                <?php $_smarty_tpl->assign('firstVariant', $_smarty_tpl->getValue('variantImages')[0], false, NULL);?>
                <input type="hidden" id="selectedVariant" name="variant_id" value="<?php echo $_smarty_tpl->getValue('firstVariant')->getId();?>
">


                <button type="submit" class="buy-btn">
                    Dodaj do koszyka
                </button>
            </form>

        </div>

    </div>

    <?php echo '<script'; ?>
>
        const mainImage = document.getElementById("mainImage");
        const variantInput = document.getElementById("selectedVariant");
        const thumbs = document.querySelectorAll(".variant-thumb");

        if (thumbs.length > 0) {
            const first = thumbs[0];
            variantInput.value = first.dataset.variant;
            first.classList.add("active");
        }

        thumbs.forEach(img => {
            img.addEventListener("click", function(e) {

                e.preventDefault();

                thumbs.forEach(el => el.classList.remove("active"));
                this.classList.add("active");

                const newImage = this.dataset.image;
                const variantId = this.dataset.variant;

                mainImage.src = "/Praktyki-2-master/uploads/" + newImage;

                // 🔥 NAJWAŻNIEJSZE
                variantInput.value = variantId;

                console.log("Wybrany variant:", variantId); // debug
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
