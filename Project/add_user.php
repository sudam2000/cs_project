<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission and insert user data into the database
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    $insert_query = "INSERT INTO users (Username, Email, Age, Password) VALUES ('$username', '$email', '$age','$password')";
    if (mysqli_query($con, $insert_query)) {
        echo "User added successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/add_user_style.css">
    <title>Add User</title>
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h1>Add User</h1>
            <form method="POST" action="add_user.php">
                <label for="username">Username:</label>
                <input type="text" name="username" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="age">Age:</label>
                <input type="number" name="age" required>

                <label for="password">Password:</label>
                <input type="password" name="password" required>

                <input type="submit" value="Add User">
            </form>
            <div class="link">
                <a href="admin_home.php">Back to Admin Page</a>
            </div>
        </div>
    </div>
</body>
</html>
