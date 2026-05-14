<?php
/* Smarty version 5.8.0, created on 2026-05-14 12:38:55
  from 'file:pages/address-create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05a63fe6f7c8_33872843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffabba9beba78f42036aafd90ccf54cf4cba70a2' => 
    array (
      0 => 'pages/address-create.tpl',
      1 => 1778755116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a05a63fe6f7c8_33872843 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11806499146a05a63fe6d3a7_29995848', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_11806499146a05a63fe6d3a7_29995848 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<div class="login-container">

    <h1>Dodaj adres</h1>

    <form method="POST">

        <input type="text" name="title" placeholder="Nazwa">

        <input type="text" name="url" placeholder="Link">

        <textarea name="description" placeholder="Opis"></textarea>

        <div class="button-group">
            <button type="submit" class="submit">
                Dodaj
            </button>
        </div>

    </form>

</div>

<?php
}
}
/* {/block "content"} */
}
