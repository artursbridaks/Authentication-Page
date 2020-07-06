<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<body>
<div class="form">
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <p>You are now in a user dashboard page.</p>
    <form action="/app/Controllers/logout.php">
        <input type="submit" value="Log Out"/>
    </form>
</div>
</body>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="/app/Views/page.css">
</head>
</html>

<style>
    .form {
        position: absolute;
        top: 10%;
        background-color: white;
        border-radius: 20px;
        padding: 20px;
        text-align: center;
    }
</style>