<?php
/* Smarty version 5.8.0, created on 2026-05-25 12:56:32
  from 'file:pages/products/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a142ae03b0d03_52141949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d96740aa8e5af0eefa69ded72859adfa8f54f6' => 
    array (
      0 => 'pages/products/edit.tpl',
      1 => 1779446949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a142ae03b0d03_52141949 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_21352063566a142ae039e4f0_77569145', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_21352063566a142ae039e4f0_77569145 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
?>


    <div class="edit-layout">

        <div class="left-panel">

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
                    <label>Nowe zdjęcie</label>
                    <input type="file" name="image" class="input-edit">
                </div>

                <button type="submit" class="save-btn">Zapisz zmiany</button>

            </form>

        </div>

        <div class="right-panel">

            <div class="variants-panel">

                <h2>Opcje / Warianty</h2>

                <div class="variant-section">
                    <h3>Kolor</h3>

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variantImages'), 'v');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach0DoElse = false;
?>
                        <label class="color-option">
                            <input type="radio" name="color" value="<?php echo $_smarty_tpl->getValue('v')->getColor();?>
" data-image="<?php echo $_smarty_tpl->getValue('v')->getImage();?>
">
                            <?php echo $_smarty_tpl->getValue('v')->getColor();?>

                        </label>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>

                <div class="variant-section">
                    <h3>Dodatkowe opcje</h3>

                    <label><input type="checkbox" class="addon" data-price="50"> LED (+50 zł)</label><br>
                    <label><input type="checkbox" class="addon" data-price="30"> Organizer (+30 zł)</label><br>
                    <label><input type="checkbox" class="addon" data-price="40"> Półka (+40 zł)</label>
                </div>

                <div class="variant-preview">

                    <?php $_smarty_tpl->assign('mainImage', $_smarty_tpl->getValue('product')->getImages()->first(), false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('mainImage')) {?>
                        <?php $_smarty_tpl->assign('previewImage', $_smarty_tpl->getValue('mainImage')->getAlt(), false, NULL);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('previewImage', "default.jpg", false, NULL);?>
                    <?php }?>

                    <img id="previewImage" src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('previewImage');?>
" class="variant-preview-img">

                    <p id="selectedColor">Kolor: Domyślny</p>
                    <p id="selectedAddons">Dodatki: Brak</p>

                    <p id="totalPrice">Cena: <?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
 zł</p>

                </div>

                <h3>Dodaj zdjęcie wariantu</h3>

                <form method="POST" action="/Praktyki-2-master/?page=products/addVariantImage&id=<?php echo $_smarty_tpl->getValue('product')->getId();?>
" enctype="multipart/form-data">

                    <label>Kolor</label>
                    <input type="text" name="color" class="input-edit" placeholder="np. Biały" required>

                    <label>Zdjęcie</label>
                    <input type="file" name="image" required>

                    <button type="submit" class="add-option-btn">Dodaj wariant</button>

                </form>

            </div>

        </div>

    </div>

    <?php echo '<script'; ?>
>
        const basePrice = parseFloat(document.getElementById("totalPrice").innerText.match(/\d+/)[0]);

        const previewImage = document.getElementById("previewImage");
        const selectedColor = document.getElementById("selectedColor");
        const selectedAddons = document.getElementById("selectedAddons");
        const totalPriceEl = document.getElementById("totalPrice");

        document.querySelectorAll('input[name="color"]').forEach(radio => {
            radio.addEventListener("change", function() {
                const image = this.dataset.image;
                const color = this.value;
                previewImage.src = "/Praktyki-2-master/uploads/" + image;
                selectedColor.innerText = "Kolor: " + color;
            });
        });

        document.querySelectorAll(".addon").forEach(chk => {
            chk.addEventListener("change", updateSummary);
        });

        function updateSummary() {
            let addons = [];
            let extraPrice = 0;

            document.querySelectorAll(".addon:checked").forEach(a => {
                addons.push(a.parentElement.innerText.trim());
                extraPrice += parseFloat(a.dataset.price);
            });

            selectedAddons.innerText = addons.length > 0 ?
                "Dodatki: " + addons.join(", ") :
                "Dodatki: Brak";

            totalPriceEl.innerText = "Cena: " + (basePrice + extraPrice) + " zł";
        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
