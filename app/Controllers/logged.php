<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
</head>
<body>
<?php
require('db.php');
session_start();
// When form submitted, check and create user session.
if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);    // removes backslashes
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // Check user is exist in the database
    $query = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $email;
        // Redirect to user dashboard page
        header("Location: /dashboard");
    } else {
        echo
        "<link rel=\"stylesheet\" href=\"/app/Views/page.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <div class='form-incorrect' style='background-color: white; padding: 20px; border-radius: 20px; 
            border: red 3px solid; position:relative; top: -140px;'>
            <h3>Incorrect Email or Password!</h3><br/>
            <form class=\"text-center\" action=\"/\">
                <button type='submit' class='btn btn-primary'>
                Try again
                </button>
            </form>
        </div>";
    }
} else {
    ?>
    <form class="form" method="post" name="login" autocomplete="off">
        <h1 class="login-title">Login</h1>
        <input type="email" class="login-input" name="email" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
    </form>
    <?php
}
?>
</body>
</html>