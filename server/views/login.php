
<form class="auth" action="">
    <fieldset>
        <legend>Авторизация</legend>
        <div class="auth__row">
            <label for="username">User name</label>
            <input value="vasa" class="auth__text" type="text" id="username">
            <i class="auth__error auth__error_hide  ">Don't content (_, {}, -, $, 0-9) legth > 5 chars</i>
        </div>

        <div class="auth__row">
            <label for="useremail">User e-mail</label>
            <input value="vasa@sdv.sd" class="auth__text" type="text" id="useremail">
            <i class="auth__error auth__error_hide  ">Not valid e-mail. (example@gmail.com)</i>
        </div>
        <div class="auth__row">
            <label for="userphone">User phone</label>
            <input value="0661052071" class="auth__text" type="text" id="userphone">
            <i class="auth__error auth__error_hide  ">Not valid phone. (+380667589561)</i>
        </div>
        <div class="auth__row">
            <label for="userpass">User password</label>
            <input value="vasawwwwwwwwwww"class="auth__text" type="password" id="userpass">
            <i class="auth__error auth__error_hide  "> Must have (_a-z, A-Z, 0-9) legth > 7 chars</i>
        </div>


        <label class="auth__check">
            Subscribe
            <input type="checkbox" id="usersubscribe">
        </label>

        <div class="auth__row">
            <button type="button" id="sendbtn" class="auth__btn" >Login</button>
        </div>
    </fieldset>
</form>
<script  src="/public/login.js"></script>