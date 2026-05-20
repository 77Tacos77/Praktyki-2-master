<?php
/* Smarty version 5.8.0, created on 2026-05-20 09:58:03
  from 'file:products_create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d698bc99d41_17623169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09a525522d4c75f6f8a6932d760fdd243d745406' => 
    array (
      0 => 'products_create.tpl',
      1 => 1779263882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d698bc99d41_17623169 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20331534616a0d698bc973f6_04422523', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_20331534616a0d698bc973f6_04422523 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<h1>Dodaj produkt</h1>

<form action="/Praktyki-2-master/index.php?page=products/store" method="POST">

    <label>Nazwa produktu</label>
    <input type="text" name="name" required>

    <label>Opis</label>
    <textarea name="description" required></textarea>

    <label>Kategoria</label>
    <input type="text" name="category" required>

    <label>Cena</label>
    <input type="number" name="price" step="0.01" required>

    <label>Zdjęcie</label>
    <input type="file" name="image" required>

    <button type="submit">Zapisz</button>

</form>

<?php
}
}
/* {/block "content"} */
}
