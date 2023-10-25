<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login Selection</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login Selection</header>
            <div class="field">
                <p>Select your login type:</p>
                <a href="login.php?type=admin" class="btn">Admin Login</a>
                <a href="login.php?type=user" class="btn">User Login</a>
            </div>
        </div>
    </div>
</body>
</html>
