<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/admin_style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p>Logo</p>
        </div>

        <div class="right-links">

            <?php

            $admin_id = $_SESSION['admin_id'];
            $query = mysqli_query($con,"SELECT * FROM admins WHERE Id='$admin_id'");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];

                

            }

            ?>



            <a href="index.php"> <button class="btn">Log Out</button></a>
            <a href="default_home.php"> <button class="btn">Home</button></a>
        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>                    
                </div>           
                <div>
                <a href="add_user.php">
                    <button type="button" class="btn btn-primary">Add User</button>
                </a>
                <a href="add_admin.php">
                    <button type="button" class="btn btn-primary">Add Admin</button>
                </a>
                <a href="add_job.php">
                    <button type="button" class="btn btn-primary">Add Job</button>
                </a>
                </div>     
            </div>           
        </div>
    </main>
    <br>
    <div>
        <table>
            <h2 style="text-align: center; font-size: 24px; margin-bottom: 10px;">User table</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>age</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM users";
                    $result = mysqli_query($con, $query);

                    if(!$result){
                        die("query failed".mysqli_error());
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Username'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Age'] ?></td>
                            <td><a href="update_user_page.php?id=<?php echo $row['Id'] ?>"><button class="btn" style="background-color: green;">Update</button></a></td>
                            <td><a href="delete_user.php?id=<?php echo $row['Id'] ?>"><button class="btn" style="background-color: red;">Delete</button></a></td>
                        </tr>    
                           
                            <?php
                        }
                    }



                ?>
                
            </tbody>
        </table>
        <br>

        <table>
            <h2 style="text-align: center; font-size: 24px; margin-bottom: 10px;">Admin table</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>age</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM admins";
                    $result = mysqli_query($con, $query);

                    if(!$result){
                        die("query failed".mysqli_error());
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Username'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Age'] ?></td>
                            <td><a href="update_admin_page.php?id=<?php echo $row['Id'] ?>"><button class="btn" style="background-color: green;">Update</button></a></td>
                            <td><a href="delete_admin.php?id=<?php echo $row['Id'] ?>"><button class="btn" style="background-color: red;">Delete</button></a></td>
                        </tr>    
                        
                            <?php
                        }
                    }



                ?>
                
            </tbody>

        </table>
        <br>

        <table>
            <h2 style="text-align: center; font-size: 24px; margin-bottom: 10px;">Job table</h2>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>Job Category</th>
                    <th>Career Level</th>
                    <th>Salary</th>
                    <th>Deadline</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM jobs";
                    $result = mysqli_query($con, $query);

                    if(!$result){
                        die("query failed".mysqli_error());
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                            <td><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['job_title'] ?></td>
                            <td><?php echo $row['company_name'] ?></td>
                            <td><?php echo $row['job_category'] ?></td>
                            <td><?php echo $row['career_level'] ?></td>
                            <td><?php echo $row['proposed_salary'] ?></td>
                            <td><?php echo $row['application_deadline'] ?></td>
                            <td><a href="update_job.php?id=<?php echo $row['Id'] ?>"><button class="btn" style="background-color: green;">Update</button></a></td>
                            <td><a href="delete_job.php?id=<?php echo $row['Id'] ?>"><button class="btn" style="background-color: red;">Delete</button></a></td>
                        </tr>    
                           
                            <?php
                        }
                    }



                ?>
                
            </tbody>
        </table>        


    </div>

        <?php

            if(isset($_GET['update_msg'])){
                echo"<br>";
                echo "<center><h3>" .$_GET['update_msg']."</h6></center>";
            }
        
        ?>


    </div>   
</body>
</html>


    