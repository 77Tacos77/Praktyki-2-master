<?php
/* Smarty version 5.8.0, created on 2026-06-03 13:21:34
  from 'file:pages/profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a200e3e070820_19015986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '435ad461f5734eb46ecf9f1cf77eb82f52328c74' => 
    array (
      0 => 'pages/profile.tpl',
      1 => 1780485690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a200e3e070820_19015986 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4279811626a200e3e065583_70711302', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_4279811626a200e3e065583_70711302 extends \Smarty\Runtime\Block
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





                        <div class="user-status">
                            <span class="status-dot"></span>

                            <span id="lastSeen" data-date="<?php echo $_smarty_tpl->getValue('user')->getLastSeen()->format('Y-m-d H:i:s');?>
">
                            </span>
                        </div>



                    </div>

                    <em>Kliknij aby edytowac</em>

                    <div class="profile-field">
                        <span class="label">Imię</span>

                        <span class="value editable" data-name="imie">
                            <?php echo $_smarty_tpl->getValue('profile')->getImie();?>

                        </span>

                    </div>



                    <div class="profile-field">
                        <span class="label">Nazwisko</span>
                        <span class="value editable" data-name="nazwisko">
                            <?php echo $_smarty_tpl->getValue('profile')->getNazwisko();?>

                        </span>
                    </div>




                    <div class="profile-field">
                        <span class="label">Ulica</span>
                        <span class="value editable" data-name="ulica">
                            <?php echo $_smarty_tpl->getValue('profile')->getUlica();?>

                        </span>
                    </div>



                    <div class="profile-field">
                        <span class="label">Kod pocztowy</span>
                        <span class="value editable" data-name="kod_pocztowy">
                            <?php echo $_smarty_tpl->getValue('profile')->getKodPocztowy();?>

                        </span>
                    </div>



                    <div class="profile-field">
                        <span class="label">Miasto</span>
                        <span class="value editable" data-name="miasto">
                            <?php echo $_smarty_tpl->getValue('profile')->getMiasto();?>

                        </span>
                    </div>



                    <div class="profile-field">
                        <span class="label">Kraj</span>
                        <span class="value editable" data-name="kraj">
                            <?php echo $_smarty_tpl->getValue('profile')->getKraj();?>

                        </span>
                    </div>



                    <div class="profile-field">
                        <span class="label">Telefon</span>
                        <span class="value editable" data-name="numer_telefonu">
                            <?php echo $_smarty_tpl->getValue('profile')->getNumerTelefonu();?>

                        </span>
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
    <?php echo '<script'; ?>
>
        // ------------------- TIME AGO -------------------
        function timeAgo(dateString) {
            const now = new Date();
            const past = new Date(dateString);
            const diff = Math.floor((now - past) / 1000);

            if (diff < 60) return "teraz";
            if (diff < 3600) return Math.floor(diff / 60) + " min temu";
            if (diff < 86400) return Math.floor(diff / 3600) + " h temu";
            return Math.floor(diff / 86400) + " dni temu";
        }

        // ------------------- LAST SEEN -------------------
        function updateLastSeen() {
            const el = document.getElementById("lastSeen");

            if (!el || !el.dataset.date) return;

            const now = new Date();
            const past = new Date(el.dataset.date);
            const diff = Math.floor((now - past) / 1000);

            if (diff < 60) {
                el.innerText = "Online teraz";
                el.parentElement.classList.add("online");
                el.parentElement.classList.remove("offline");
            } else if (diff < 300) {
                el.innerText = "Aktywny " + timeAgo(el.dataset.date);
                el.parentElement.classList.add("online");
                el.parentElement.classList.remove("offline");
            } else {
                el.innerText = "Offline (" + timeAgo(el.dataset.date) + ")";
                el.parentElement.classList.add("offline");
                el.parentElement.classList.remove("online");
            }
        }

        // ------------------- DOM READY -------------------
        document.addEventListener("DOMContentLoaded", function() {

            updateLastSeen();
            setInterval(updateLastSeen, 10000);

            document.querySelectorAll(".editable").forEach(el => {

                el.addEventListener("click", () => {

                    if (el.querySelector("input")) return;

                    const currentValue = el.innerText;
                    let lastSavedValue = currentValue;

                    el.dataset.lastSaved = currentValue;

                    el.innerHTML = '<input type="text" value="' + currentValue + '" class="edit-input">';

                    const input = el.querySelector("input");
                    input.focus();
                    input.select();

                    let saved = false;
                    let timeout;

                    const field = el.dataset.name;

                    function handleClickOutside(e) {
                        if (!el.contains(e.target) && !saved) {
                            clearTimeout(timeout);
                            el.innerText = currentValue;
                            document.removeEventListener("click", handleClickOutside);
                        }
                    }

                    timeout = setTimeout(() => {

                        const value = input.value.trim();


                        if (value === lastSavedValue) return;

                        saved = true;
                        saveValue(el, value);
                        lastSavedValue = value;

                    }, 600);

                    // ------------------- INPUT -------------------
                    input.addEventListener("input", () => {

                        let value = input.value;

                        if (field === "numer_telefonu") {
                            let digits = value.replace(/\D/g, '').substring(0, 9);

                            let formatted = '';
                            for (let i = 0; i < digits.length; i++) {
                                if (i > 0 && i % 3 === 0) formatted += ' ';
                                formatted += digits[i];
                            }

                            input.value = formatted;
                        }

                        clearTimeout(timeout);

                        timeout = setTimeout(() => {

                            const value = input.value.trim();
                            const digits = (value.match(/\d/g) || []).join('');

                            // ✅ tylko jak pełny numer
                            if (field === "numer_telefonu" && digits.length !== 9) return;

                            if (value === lastSavedValue) return;

                            saved = true;
                            saveValue(el, value);

                            lastSavedValue = value;

                        }, 600);
                    });
                    // ------------------- KEYBOARD -------------------
                    input.addEventListener("keydown", (e) => {

                        if (e.key === "Enter") {
                            e.preventDefault();

                            const value = input.value.trim();
                            if (value === lastSavedValue) return;

                            saved = true;
                            saveValue(el, value);

                            document.removeEventListener("click", handleClickOutside);
                        }

                        if (e.key === "Escape") {
                            clearTimeout(timeout);
                            el.innerText = currentValue;
                            document.removeEventListener("click", handleClickOutside);
                        }
                    });

                });

            });

        });


        // ------------------- SAVE -------------------
        function saveValue(el, newValue) {

            const field = el.dataset.name;
            let value = newValue.trim();

            const currentValue = el.innerText;
            const lastSaved = el.dataset.lastSaved || currentValue;

            if (!value) {
                showToast("Pole nie może być puste ❌", "error");
                return;
            }

            if (value === lastSaved) return;

            // ✅ TELEFON
            if (field === "numer_telefonu") {
                const digits = (value.match(/\d/g) || []).join('');

                if (digits.length !== 9) return;

                value = digits; // 🔥 tu nadpisujesz
            }

            // ✅ KOD
            if (field === "kod_pocztowy" && !/^\d<?php echo 2;?>
-\d<?php echo 3;?>
$/.test(value)) {
                showToast("Nieprawidłowy kod pocztowy ❌", "error");
                return;
            }

            // ✅ IMIĘ
            if ((field === "imie" || field === "nazwisko") && value.length < 2) {
                showToast("Imię i nazwisko musi mieć co najmniej 2 litery ❌", "error");
                return;
            }

            el.innerText = "Zapisywanie...";

            fetch("/Praktyki-2-master/?page=profile/updateField", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        field: field,
                        value: value
                    })
                })
                .then(res => {
                    if (!res.ok) throw new Error();
                    return res.text();
                })
                .then(() => {

                    let displayValue = newValue;

                    if (field === "numer_telefonu") {
                        const digits = (newValue.match(/\d/g) || []).join('');

                        displayValue = digits.replace(/(\d<?php echo 3;?>
)(\d<?php echo 3;?>
)(\d<?php echo 3;?>
)/, '$1 $2 $3');
                    }

                    el.innerText = displayValue;
                    el.dataset.lastSaved = displayValue;

                    showToast("Zapisano ✅", "success");
                })

                .catch(() => {
                    el.innerText = el.dataset.lastSaved || currentValue;
                    showToast("Błąd zapisu ❌", "error");
                });
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
