{extends file="layouts/default.tpl"} {block name="content"}
    {if isset($error)}
        <div class="toast toast-error"> {$error} </div>
    {/if}
    {if isset($success)}
        <div class="toast toast-success"> {$success} </div>
    {/if}
    <div class="login-container">
        <h1>Zmień hasło</h1>
        <form method="POST"> <label>Login</label> <input type="text" name="login"> <label>Aktualne hasło</label> <input type="password" name="currentPassword"> <label>Nowe hasło</label> <input type="password" name="newPassword"> <label>Powtórz nowe hasło</label> <input type="password" name="repeatPassword">
            <div class="button-group"> <button type="submit" class="submit"> Zmień hasło </button> </div>
        </form>
    </div>
    <script>
        setTimeout(() => { const toast = document.querySelector('.toast'); if (toast) { toast.style.opacity = '0';
                setTimeout(() => { toast.remove(); }, 500); } }, 3000);
    </script>
{/block}