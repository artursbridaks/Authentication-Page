<form id="form" method="post" name="login" autocomplete="off" action="/app/Controllers/logged.php">
    <label for="login-email">Email</label><label class="required">*</label>
    <img class="email-picture" src="/app/Views/Assets/email.png" alt="email picture"><br>
    <input type="email" id="login-email" name="email" required><br>
    <br>
    <label for="login-password">Password</label><label class="required">*</label>
    <img class="password-picture" src="/app/Views/Assets/lock.png" alt="password picture"><br>
    <input type="password" id="login-password" name="password" required><br>
    <button class="btn btn-danger" type="submit" value="Login" name="submit" id="login-button">
        LOGIN
    </button>
</form>
