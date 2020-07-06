
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/app/Views/page.css">
    <link rel="stylesheet" href="/app/Views/white-frame-login.css">
    <link rel="stylesheet" href="/app/Views/black-frame-login.css">
    <script src="/app/Functions/functions.js"></script>
    <title>Login Form</title>
</head>
<body>
<div class="black-frame-register">
</div>
<div class="black-frame-content-register">
    <h1 id="header">Don't have an account?</h1>
    <hr id="line">
    <p id="text">Simply click the ‘Sign Up’ button below. Fill in your details and make a note of your password.
    </p>
    <button class="btn btn-outline-primary" id="sign-up-button" onclick="blackFunction()">SIGN UP</button>
</div>
<div class="black-frame-content-login">
    <h1 id="header-login">Have an account?</h1>
    <hr id="line-login">
    <p id="text-login">Click the ‘Login‘ button below to sign in.</p>
    <button class="btn btn-outline-primary" id="sign-up-button-login" onclick="whiteFunction()">LOGIN</button>
</div>
<div class="white-frame-login" id="white-frame-login">
    <div class="white-frame-content-login" id="white-frame-content-login">
        <h1 id="login-header">Login</h1>
        <img id="login-picture" src="/app/Views/Assets/logo.png" alt="Magebit logo">
        <hr id="login-line">
        <div class="login-form">
            <?php require('app/Controllers/login.php'); ?>
        </div>
    </div>
    <div class="white-frame-content-register" id="white-frame-content-register">
        <h1 id="register-header">Sign Up</h1>
        <img id="register-picture" src="/app/Views/Assets/logo.png" alt="Magebit logo">
        <hr id="register-line">
        <div class="login-form">
            <?php require('app/Controllers/registration.php'); ?>
        </div>
    </div>
</div>
</body>
</html>
