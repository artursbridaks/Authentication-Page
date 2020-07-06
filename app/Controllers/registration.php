<?php
require('db.php');

// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");
    $query = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo
        "<link rel=\"stylesheet\" href=\"/app/Views/page.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <div class=\"text-center\" style='background-color: white; padding: 20px; border-radius: 20px; 
            border: green 3px solid; position:relative; right: 8%; top: 4%; width: 300px'>
            <h3>You are registered successfully!</h3><br/>            
            <form class=\"text-center\">
                <button type='submit' class='btn btn-primary'>
                Register another
                </button>
            </form>
            
        </div>";
//        header("Location: /.text-center");
    }
} else {
    ?>
    <form id="form" method="post" autocomplete="off">
        <label for="register-name">Name</label><label class="required">*</label>
        <img class="name-picture" src="/app/Views/Assets/name.png" alt="name picture"><br>
        <input type="text" id="register-name" name="username" required><br>
        <br>
        <label for="register-email">Email</label><label class="required">*</label>
        <img class="email-picture" src="/app/Views/Assets/email.png" alt="email picture"><br>
        <input type="email" id="register-email" name="email" required><br>
        <br>
        <label for="register-password">Password</label><label class="required">*</label>
        <img class="password-picture" src="/app/Views/Assets/lock.png" alt="password picture"><br>
        <input type="password" id="register-password" name="password" required><br>
        <button class="btn btn-danger" id="register-button" type="submit" value="submit"
                name="submit">SIGN UP
        </button>
    </form>
    <?php
}
?>