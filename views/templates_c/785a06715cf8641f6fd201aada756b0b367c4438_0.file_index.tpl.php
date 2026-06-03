<?php
/* Smarty version 5.8.0, created on 2026-06-02 13:23:06
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1ebd1a109401_62212154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '785a06715cf8641f6fd201aada756b0b367c4438' => 
    array (
      0 => 'index.tpl',
      1 => 1780399385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1ebd1a109401_62212154 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8577735996a1ebd1a0f79b2_48401490', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_8577735996a1ebd1a0f79b2_48401490 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
?>

    <h1 class="products-title">Nasze produkty</h1>
    <hr>
    <div class="products-page">
        <div class="filters">

            <label>Kolor: </label>

            <select id="colorFilter">
                <option value="">Wszystkie kolory</option>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('colors'), 'c');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('c');?>
"><?php echo $_smarty_tpl->getValue('c');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>



            <label>Cena: </label>

            <select id="sortFilter">
                <option value="">Sortuj</option>
                <option value="price-asc">Cena rosnąco</option>
                <option value="price-desc">Cena malejąco</option>
            </select>


        </div>



        <div class="products-grid">

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'p');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach1DoElse = false;
?>

                <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('p')->getVariants()->first(), false, NULL);?>

                <a href="/Praktyki-2-master/?page=product/view&id=<?php echo $_smarty_tpl->getValue('p')->getId();?>
" class="product-card" data-color="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('implode')($_smarty_tpl->getValue('p')->colors,' ');?>
" data-price="<?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
">

                    <div class="product-image">
                        <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('p')->getImages()->first(), false, NULL);?>

                        <?php if ($_smarty_tpl->getValue('image')) {?>

                            <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getAlt();?>
" alt="Produkt" class="product-main-image" id="img-<?php echo $_smarty_tpl->getValue('p')->getId();?>
">

                        <?php } else { ?>
                            <img src="/Praktyki-2-master/uploads/default.jpg" alt="Brak zdjęcia">
                        <?php }?>
                    </div>

                    <div class="product-content">
                        <h2><?php echo $_smarty_tpl->getValue('p')->getName();?>
</h2>
                        <p><?php echo $_smarty_tpl->getValue('p')->getDescription();?>
</p>

                        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('p')->colors ?? null)))) {?>
                            <div class="color-dots">

                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p')->getVariantImages(), 'img');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('img')->value) {
$foreach2DoElse = false;
?>
                                    <span class="color-dot" data-image="<?php echo $_smarty_tpl->getValue('img')->getImage();?>
" data-product="<?php echo $_smarty_tpl->getValue('p')->getId();?>
" data-color="<?php echo $_smarty_tpl->getValue('img')->getColor();?>
" title="<?php echo $_smarty_tpl->getValue('img')->getColor();?>
"></span>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('variant')) {?>
                            <p class="product-price">Cena: <?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
 zł</p>
                        <?php } else { ?>
                            <p class="product-price">Brak ceny</p>
                        <?php }?>
                    </div>

                </a>

            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        </div>


    </div>
    <?php echo '<script'; ?>
>
        const colorFilter = document.getElementById("colorFilter");
        const sortFilter = document.getElementById("sortFilter");
        const products = document.querySelectorAll(".product-card");

        // ✅ FILTROWANIE
        function filterProducts() {

            const selectedColor = colorFilter.value;

            products.forEach(product => {

                const color = product.dataset.color || "";
                let show = true;

                // 🔽 FILTER
                if (
                    selectedColor &&
                    !color.toLowerCase().includes(selectedColor.toLowerCase())
                ) {
                    show = false;
                }

                product.style.display = show ? "" : "none";

                // 🔥 NOWOŚĆ → ZMIANA ZDJĘCIA
                if (selectedColor && show) {

                    const dots = product.querySelectorAll(".color-dot");

                    dots.forEach(dot => {

                        if (dot.dataset.color.toLowerCase() === selectedColor.toLowerCase()) {

                            const img = dot.dataset.image;
                            const productId = dot.dataset.product;

                            const targetImg = document.getElementById("img-" + productId);

                            if (targetImg) {
                                targetImg.src = "/Praktyki-2-master/uploads/" + img;
                            }

                            // highlight
                            dots.forEach(d => d.classList.remove("active"));
                            dot.classList.add("active");
                        }
                    });
                }

            });
        }


        // ✅ SORTOWANIE
        function sortProducts() {
            const container = document.querySelector(".products-grid");
            const items = Array.from(container.querySelectorAll(".product-card"));

            if (sortFilter.value === "price-asc") {
                items.sort((a, b) => a.dataset.price - b.dataset.price);
            }

            if (sortFilter.value === "price-desc") {
                items.sort((a, b) => b.dataset.price - a.dataset.price);
            }

            items.forEach(el => container.appendChild(el));
        }

        // ✅ EVENTY
        colorFilter.addEventListener("change", filterProducts);
        sortFilter.addEventListener("change", sortProducts);

        // ✅ KLIK KROPKI → ZMIANA ZDJĘCIA
        document.querySelectorAll(".color-dot").forEach(dot => {
            dot.addEventListener("click", (e) => {

                e.preventDefault();
                e.stopPropagation();

                const img = dot.dataset.image;
                const productId = dot.dataset.product;

                const targetImg = document.getElementById("img-" + productId);

                if (targetImg) {
                    targetImg.src = "/Praktyki-2-master/uploads/" + img;
                }

                // ✅ highlight aktywnej kropki
                dot.closest(".product-card")
                    .querySelectorAll(".color-dot")
                    .forEach(d => d.classList.remove("active"));

                dot.classList.add("active");
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
