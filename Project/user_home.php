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
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p>Logo</p>
        </div>

        <div class="right-links">

            <?php

            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT * FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
                

            }

            ?>



            <a href="index.php"> <button class="btn">Log Out</button></a>
            <a href="job_post.php"> <button class="btn">Post a Job</button></a>
            <a href="help.php"> <button class="btn">Need Help?</button></a>
            <a href="about_us.php"> <button class="btn">About us</button></a>

        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
                </div>                
            </div>            
        </div>
    </main>
    <div>
        <h1>Jobs for you</h1>
                    <?php

                        $query = "SELECT * FROM jobs";
                        $result = mysqli_query($con, $query);

                        if(!$result){
                            die("query failed".mysqli_error());
                        }
                        else{
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                
                                <section class="main">
                                    <section class="main-course">
                                    <div class="course">
                                    <div class="box">
                                <h3>Job Title:<?php echo $row['job_title'] ?></h3>
                                <p>Company Name :<?php echo $row['company_name'] ?><p>
                                <p>Job Category :<?php echo $row['job_category'] ?><p>
                                <p>Career Level :<?php echo $row['career_level'] ?><p>
                                <p>Qualifications :<?php echo $row['qualifications'] ?></p>
                                <p>Proposed salary :<?php echo $row['proposed_salary'] ?><p>
                                <p>Application deadline :<?php echo $row['application_deadline'] ?><p>
                                <br>  
                                <button class="btn" type="apply" onclick="alert('You have applied successfully!!!!!!!!!!!')">Apply</button>
                                </div>
                                <br><br><br>
                </div>
            </section>
            </section>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                            
                                <?php
                            }
                        }



                    ?>
                    

            <?php

                if(isset($_GET['update_msg'])){
                    echo"<br>";
                    echo "<center><h3>" .$_GET['update_msg']."</h6></center>";
                }
            
            ?>
    </div>   


    
</body>
</html>