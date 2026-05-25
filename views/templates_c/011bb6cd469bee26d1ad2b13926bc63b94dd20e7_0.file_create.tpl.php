<?php
/* Smarty version 5.8.0, created on 2026-05-25 08:44:23
  from 'file:pages/products/create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a13efc7cc15a0_76707250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '011bb6cd469bee26d1ad2b13926bc63b94dd20e7' => 
    array (
      0 => 'pages/products/create.tpl',
      1 => 1779691435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a13efc7cc15a0_76707250 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14011086456a13efc7cbed02_05341329', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_14011086456a13efc7cbed02_05341329 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
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
