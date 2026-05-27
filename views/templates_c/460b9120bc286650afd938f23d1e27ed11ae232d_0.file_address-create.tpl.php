<?php
/* Smarty version 5.8.0, created on 2026-05-27 12:46:57
  from 'file:pages/address-create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a16cba170c217_37481354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460b9120bc286650afd938f23d1e27ed11ae232d' => 
    array (
      0 => 'pages/address-create.tpl',
      1 => 1779877755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a16cba170c217_37481354 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
```smarty


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17464616046a16cba17084d7_81088172', "content");
?>

```
<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_17464616046a16cba17084d7_81088172 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
?>


<div class="login-container">

    <h1>Dodaj adres</h1>

    <form method="POST">

        <label>Imię</label>
        <input type="text" name="firstName" required>

        <label>Nazwisko</label>
        <input type="text" name="lastName" required>

        <label>Ulica</label>
        <input type="text" name="street" required>

        <label>Kod pocztowy</label>
        <input type="text" name="postcode" required>

        <label>Miasto</label>
        <input type="text" name="city" required>

        <label>Kraj</label>
        <input type="text" name="country" required>

        <label>Numer telefonu</label>
        <input type="text" name="phone" required>

        <div class="button-group">

            <button class="submit" type="submit">
                Zapisz
            </button>

            <button class="reset" type="reset">
                Reset
            </button>

        </div>

    </form>

</div>

<?php
}
}
/* {/block "content"} */
}
