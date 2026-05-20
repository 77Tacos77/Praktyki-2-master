<?php
/* Smarty version 5.8.0, created on 2026-05-20 10:39:18
  from 'file:pages/products/create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d7336706574_93542201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '011bb6cd469bee26d1ad2b13926bc63b94dd20e7' => 
    array (
      0 => 'pages/products/create.tpl',
      1 => 1779266356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d7336706574_93542201 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18796724716a0d7336703d95_10307810', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_18796724716a0d7336703d95_10307810 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\products';
?>

    <div class="login-container">
        <h1>Dodaj produkt</h1>
        <form method="POST" action="/Praktyki-2-master/?page=products/store" enctype="multipart/form-data"> <label>Nazwa produktu</label> <input type="text" name="name"> <label>Kategoria</label> <input type="text" name="category"> <label>Opis</label> <textarea name="description"></textarea> <label>Cena</label> <input type="number" step="0.01" name="price"> <label>Zdjęcie</label> <input type="file" name="image"> <button type="submit"> Zapisz produkt </button> </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
