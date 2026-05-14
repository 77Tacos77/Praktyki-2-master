<?php
/* Smarty version 5.8.0, created on 2026-05-14 10:18:42
  from 'file:pages/user.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05856209e767_49214497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82f3c07e848d89dd114e239e7f35af6b256e2eb6' => 
    array (
      0 => 'pages/user.tpl',
      1 => 1778744599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a05856209e767_49214497 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11656238756a05856209a4e2_12766281', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_11656238756a05856209a4e2_12766281 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


<div class="user-panel">

    <h1>Panel użytkownika</h1>

    <p>Witaj <?php echo $_SESSION['login'];?>
</p>

    <div class="card-links">

  
        <a href="https://github.com" target="_blank">
            GitHub
        </a>

        <a href="https://google.com" target="_blank">
            Google
        </a>

        <a href="https://youtube.com" target="_blank">
            YouTube
        </a>

    </div>

</div>

<?php
}
}
/* {/block "content"} */
}
