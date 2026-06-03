<?php
/* Smarty version 5.8.0, created on 2026-06-03 09:49:33
  from 'file:pages/products/create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1fdc8dbce352_16144400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbbb01be8138b3573d27f5e45c7e745899318ec7' => 
    array (
      0 => 'pages/products/create.tpl',
      1 => 1780472973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1fdc8dbce352_16144400 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11405282136a1fdc8dbcb148_21562730', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_11405282136a1fdc8dbcb148_21562730 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
?>


<div class="admin-product-wrapper">

    <form
        action="/Praktyki-2-master/?page=products/store"
        method="POST"
        enctype="multipart/form-data"
        class="product-form"
    >

                <div class="left-panel">

            <div class="image-box">

                <img
                    id="previewImage"
                    src="/Praktyki-2-master/uploads/default.jpg"
                    class="preview-image"
                >

            </div>

            <div class="form-group">

                <label>Zdjęcie produktu</label>

                <input
                    type="file"
                    name="image"
                    id="imageInput"
                >

            </div>

        </div>

                <div class="right-panel">

            <h1 class="form-title">
                Dodaj produkt
            </h1>
            <hr>
            <div class="form-section">

                <h3>Dane produktu</h3>

                <div class="form-group">

                    <label>Nazwa produktu</label>

                    <input
                        type="text"
                        name="name"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>Kategoria</label>

                    <input
                        type="text"
                        name="category"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>Opis</label>

                    <textarea
                        name="description"
                        rows="6"
                        required
                    ></textarea>

                </div>

            </div>
            <hr>
            <div class="form-section">

                <h3>Wariant produktu</h3>

                <div class="variant-card">

                    <div class="form-group">

                        <label>Nazwa wariantu</label>

                        <input
                            type="text"
                            name="variant_name"
                            placeholder="np. Czarny"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label>Cena</label>

                        <input
                            type="number"
                            step="0.01"
                            name="price"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label>EAN13</label>

                        <input
                            type="text"
                            name="ean13"
                            value="0000000000000"
                        >

                    </div>

                </div>

            </div>

            <button type="submit" class="save-btn">

                Zapisz produkt

            </button>

        </div>

    </form>

</div>

<?php echo '<script'; ?>
>

const imageInput =
    document.getElementById('imageInput');

const previewImage =
    document.getElementById('previewImage');

imageInput.addEventListener('change', function(e){

    const file = e.target.files[0];

    if(file){

        previewImage.src =
            URL.createObjectURL(file);

    }

});

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
