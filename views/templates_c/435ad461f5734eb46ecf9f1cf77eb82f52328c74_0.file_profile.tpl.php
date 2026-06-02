<?php
/* Smarty version 5.8.0, created on 2026-06-02 11:37:04
  from 'file:pages/profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1ea4400625a7_35357133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '435ad461f5734eb46ecf9f1cf77eb82f52328c74' => 
    array (
      0 => 'pages/profile.tpl',
      1 => 1780392904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1ea4400625a7_35357133 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12364443456a1ea440059cb4_12001898', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_12364443456a1ea440059cb4_12001898 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
?>


    <div class="login-container text-center">

        <h1 class="mb-4">Mój profil</h1>
        <div class="profile-wrapper">

            <?php if (!$_smarty_tpl->getValue('edit')) {?>

                <div class="profile-card">

                    <div class="profile-header">
                        <div class="avatar"><img src="/Praktyki-2-master/profile_default.jpg" alt="Avatar"></div>
                        <h3><?php echo $_smarty_tpl->getValue('profile')->getImie();?>
 <?php echo $_smarty_tpl->getValue('profile')->getNazwisko();?>
</h3>
                    </div>

                    <div class="profile-row">
                        <span>Imię</span>
                        <strong><?php echo $_smarty_tpl->getValue('profile')->getImie();?>
</strong>
                    </div>

                    <div class="profile-row">
                        <span>Nazwisko</span>
                        <strong><?php echo $_smarty_tpl->getValue('profile')->getNazwisko();?>
</strong>
                    </div>


                    <div class="profile-row">
                        <span>Ulica</span>
                        <strong><?php echo $_smarty_tpl->getValue('profile')->getUlica();?>
</strong>
                    </div>

                    <div class="profile-row">
                        <span>Kod pocztowy</span>
                        <strong><?php echo $_smarty_tpl->getValue('profile')->getKodPocztowy();?>
</strong>
                    </div>

                    <div class="profile-row">
                        <span>Miasto</span>
                        <strong><?php echo $_smarty_tpl->getValue('profile')->getMiasto();?>
</strong>
                    </div>

                    <div class="profile-row">
                        <span>Kraj</span>
                        <strong><?php echo $_smarty_tpl->getValue('profile')->getKraj();?>
</strong>
                    </div>

                    <div class="profile-row">
                        <span>Telefon</span>
                        <strong><?php echo $_smarty_tpl->getValue('profile')->getNumerTelefonu();?>
</strong>
                    </div>

                </div>

                <!-- ✅ TO MUSI BYĆ OBOK -->
                <div class="profile-side">

                    <a class="profile-btn" href="/Praktyki-2-master/profile-edit">
                        ✏️ Edytuj profil
                    </a>

                    <a class="profile-btn" href="/Praktyki-2-master/change-password">
                        🔒 Zmień hasło
                    </a>

                    <a class="profile-btn secondary" href="/Praktyki-2-master/address-import">
                        ⬇️ Importuj dane
                    </a>

                </div>

            <?php }?>

        </div>
        <?php if ($_smarty_tpl->getValue('edit')) {?>
            <form method="POST" class="text-start">

                <div class="profile-header">
                    <div class="avatar"><img src="/Praktyki-2-master/profile_default.jpg" alt="Avatar"></div>
                    <h3><?php echo $_smarty_tpl->getValue('profile')->getImie();?>
 <?php echo $_smarty_tpl->getValue('profile')->getNazwisko();?>
</h3>
                </div>
                <hr>
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

                <button type="submit" class="profile-btn save">
                    💾 Zapisz zmiany
                </button>

            </form>
        <?php }?>

    </div>

<?php
}
}
/* {/block "content"} */
}
