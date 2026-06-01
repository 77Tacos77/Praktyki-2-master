<?php
/* Smarty version 5.8.0, created on 2026-06-01 10:31:28
  from 'file:pages/profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1d43609c6893_57224523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '435ad461f5734eb46ecf9f1cf77eb82f52328c74' => 
    array (
      0 => 'pages/profile.tpl',
      1 => 1780302686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1d43609c6893_57224523 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_769818146a1d43609b60b8_79316672', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_769818146a1d43609b60b8_79316672 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
?>


    <div class="login-container text-center">

        <h1 class="mb-4">Mój profil</h1>

        <?php if (!$_smarty_tpl->getValue('edit')) {?>
            <div class="profile-box">

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

                <div class="profile-actions">

    <a class="profile-btn" href="/Praktyki-2-master/profile-edit">
        Edytuj profil
    </a>

    <a class="profile-btn" href="/Praktyki-2-master/change-password">
        Zmień hasło
    </a>

    <a class="profile-btn secondary" href="/Praktyki-2-master/address-import">
        Importuj dane
    </a>

</div>
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
                <div class="profile-actions"> <a class="edit-btn" href="/Praktyki-2-master/?page=profile-edit"> Edytuj profil </a> <a class="edit-btn" href="/Praktyki-2-master/?page=change-password"> Zmień hasło </a> <a class="choose-btn" href="/Praktyki-2-master/?page=address-import"> Importuj dane do adresu </a> </div>
            </form>
        <?php }?>

    </div>

<?php
}
}
/* {/block "content"} */
}
