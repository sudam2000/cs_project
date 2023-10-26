<?php 
   include("php/config.php");
?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];



        $query = "SELECT * FROM admins WHERE Id = '$id' ";
        $result = mysqli_query($con, $query);

        if(!$result){
            die("query failed".mysqli_error());
        }
        else{
            $row = mysqli_fetch_assoc($result);
        }
    }   



?>


<?php

    if(isset($_POST['update_admin'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];

        }
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        $query = "UPDATE admins SET Username = '$username', Email = '$email', Age = '$age', Password = '$password'
        WHERE Id ='$idnew' ";

        $result = mysqli_query($con, $query);

        if(!$result){
            die("query failed".mysqli_error());
        }
        else{
            header('location:admin_home.php?update_msg=You have successfully updated');
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/add_user_style.css">
    <title>Update User</title>
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h1>Update</h1>
            <form method="POST" action="update_admin_page.php?id_new=<?php echo $id; ?>">
                <label for="username">Username:</label>
                <input type="text" name="username"  value="<?php echo $row['Username'] ?>"required>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['Email'] ?>"required>

                <label for="age">Age:</label>
                <input type="number" name="age" value="<?php echo $row['Age'] ?>"required>

                <label for="password">Password:</label>
                <input type="password" name="password" value="<?php echo $row['Password'] ?>"required>

                <input type="submit" name="update_admin"value="Update User">
            </form>
        </div>
    </div>
</body>
</html>