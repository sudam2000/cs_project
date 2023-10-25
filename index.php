<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
                include("php/config.php");
                if(isset($_POST['submit'])){
                    $username = mysqli_real_escape_string($con, $_POST['username']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    // Check user database
                    $user_result = mysqli_query($con, "SELECT * FROM users WHERE Username='$username' AND Password='$password' ") or die("Select Error");
                    $user_row = mysqli_fetch_assoc($user_result);

                    // Check admin database
                    $admin_result = mysqli_query($con, "SELECT * FROM admins WHERE Username='$username' AND Password='$password' ") or die("Select Error");
                    $admin_row = mysqli_fetch_assoc($admin_result);

                    if (is_array($user_row) && !empty($user_row)) {
                        $_SESSION['valid'] = $user_row['Email'];
                        $_SESSION['username'] = $user_row['Username'];
                        $_SESSION['age'] = $user_row['Age'];
                        $_SESSION['id'] = $user_row['Id'];
                        header("Location: user_home.php"); // Redirect to user home page
                    } elseif (is_array($admin_row) && !empty($admin_row)) {
                        $_SESSION['admin_valid'] = $admin_row['Email'];
                        $_SESSION['admin_username'] = $admin_row['Username'];
                        $_SESSION['admin_age'] = $admin_row['Age'];
                        $_SESSION['admin_id'] = $admin_row['Id'];
                        header("Location: admin_home.php"); // Redirect to admin home page
                    } else {
                        echo "<div class='message'>
                            <p>Wrong Username or Password</p>
                        </div> <br>  ";
                        echo "<a href='index.php'><button class='btn'>Go Back</button>";
                    }
                } else {
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login">
                </div>
                <div class="links">
                    Don't have an account? <a href="register.php">Sign up now</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>