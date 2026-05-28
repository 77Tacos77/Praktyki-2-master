<?php
/* Smarty version 5.8.0, created on 2026-05-28 11:40:31
  from 'file:pages/payment/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a180d8fa99a74_05821612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9d33d2045e41c1031eee77f3fd323da5df3fbc' => 
    array (
      0 => 'pages/payment/index.tpl',
      1 => 1779961062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a180d8fa99a74_05821612 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\payment';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8492943176a180d8fa95b44_41988085', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_8492943176a180d8fa95b44_41988085 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\payment';
?>


<div class="payment-page">

    <h1>Przetwarzanie płatności...</h1>

    <div class="loader"></div>

    <p>Proszę czekać, trwa realizacja zamówienia</p>

</div>

<?php echo '<script'; ?>
>
    setTimeout(() => {
        window.location.href = "/Praktyki-2-master/?page=cart/thankyou";
    }, 2000);
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
