<?php
/* Smarty version 5.8.0, created on 2026-05-28 11:49:42
  from 'file:pages/cart/thankyou.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a180fb66cd361_12917291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '026145518f23340e99ab84fd33fe6a1e28600aa0' => 
    array (
      0 => 'pages/cart/thankyou.tpl',
      1 => 1779961752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a180fb66cd361_12917291 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\cart';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10628858686a180fb66caf28_50477986', "content");
?>

``<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_10628858686a180fb66caf28_50477986 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\cart';
?>


    <div class="thankyou-page">

        <div class="thankyou-box">

            <h1>✅ Zamówienie złożone!</h1>

            <p class="thanks-text">
                Dziękujemy za zakupy w naszym sklepie 🙌
            </p>

            <p class="mail-info">
                📩 Potwierdzenie zamówienia oraz paragon zostały wysłane na Twój adres e-mail.
            </p>

            <p class="order-info">
                🚚 Twoje zamówienie jest już przygotowywane do wysyłki.
            </p>

            <a href="/Praktyki-2-master/" class="back-btn">
                ⬅ Powrót do sklepu
            </a>

        </div>

    </div>

<?php
}
}
/* {/block "content"} */
}
