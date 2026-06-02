<?php
/* Smarty version 5.8.0, created on 2026-06-02 11:39:12
  from 'file:pages/profile_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1ea4c08d3f82_35462837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dd6809507762ab07be3b0629f9f9e3714ec8440' => 
    array (
      0 => 'pages/profile_edit.tpl',
      1 => 1780393115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1ea4c08d3f82_35462837 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13336704206a1ea4c08ca9c1_42204063', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_13336704206a1ea4c08ca9c1_42204063 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
?>


    <div class="login-container text-center">

        <h1 class="mb-4">Mój profil</h1>

        <?php if (!$_smarty_tpl->getValue('edit')) {?>
            <div class="fs-4">

                <p><strong>Imię:</strong> <?php echo $_smarty_tpl->getValue('profile')->getImie();?>
</p>
                <p><strong>Nazwisko:</strong> <?php echo $_smarty_tpl->getValue('profile')->getNazwisko();?>
</p>
                <p><strong>Ulica:</strong> <?php echo $_smarty_tpl->getValue('profile')->getUlica();?>
</p>
                <p><strong>Kod pocztowy:</strong> <?php echo $_smarty_tpl->getValue('profile')->getKodPocztowy();?>
</p>
                <p><strong>Miasto:</strong> <?php echo $_smarty_tpl->getValue('profile')->getMiasto();?>
</p>
                <p><strong>Kraj:</strong> <?php echo $_smarty_tpl->getValue('profile')->getKraj();?>
</p>
                <p><strong>Telefon:</strong> <?php echo $_smarty_tpl->getValue('profile')->getNumerTelefonu();?>
</p>

                <a href="index.php?page=profile_edit" class="btn btn-light mt-4" style="background:#8f8d8d; color:white;">
                    Edytuj dane
                </a>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('edit')) {?>
            <form method="POST" class="text-start">

                <label>Imię</label>
                <input class="form-control" type="text" name="imie" value="<?php echo $_smarty_tpl->getValue('profile')->getImie();?>
">

                <label>Nazwisko</label>
                <input class="form-control" type="text" name="nazwisko" value="<?php echo $_smarty_tpl->getValue('profile')->getNazwisko();?>
">

                <label>Ulica</label>
                <input class="form-control" type="text" name="ulica" value="<?php echo $_smarty_tpl->getValue('profile')->getUlica();?>
">

                <label>Kod pocztowy</label>
                <input class="form-control" type="text" name="kod_pocztowy" value="<?php echo $_smarty_tpl->getValue('profile')->getKodPocztowy();?>
">

                <label>Miasto</label>
                <input class="form-control" type="text" name="miasto" value="<?php echo $_smarty_tpl->getValue('profile')->getMiasto();?>
">

                <label>Kraj</label>
                <input class="form-control" type="text" name="kraj" value="<?php echo $_smarty_tpl->getValue('profile')->getKraj();?>
">

                <label>Telefon</label>
                <input class="form-control" type="text" name="numer_telefonu" value="<?php echo $_smarty_tpl->getValue('profile')->getNumerTelefonu();?>
">


                <div class="button-row">
                    <a href="/Praktyki-2-master/?page=profile" class="profile-btn secondary">
                        ❌ Anuluj
                    </a>

                    <button type="submit" class="profile-btn save">
                        💾 Zapisz zmiany
                        </bu <?php }?> </div>

    <?php
}
}
/* {/block "content"} */
}
