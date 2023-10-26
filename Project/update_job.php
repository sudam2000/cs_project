<?php 
   include("php/config.php");
?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];


        $query = "SELECT * FROM jobs WHERE Id = '$id' ";
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

    if(isset($_POST['update_job'])){

        if(isset($_GET['id_new'])){
            $idnew = $_GET['id_new'];

        }
        $job_title = $_POST['job_title'];
        $job_description = $_POST['job_description'];
        $career_level = $_POST['career_level'];
        $company_name = $_POST['company_name'];
        $job_category = $_POST['job_category'];
        $qualifications = $_POST['qualifications'];
        $proposed_salary = $_POST['proposed_salary'];
        $required_skills = $_POST['required_skills'];
        $application_deadline = $_POST['application_deadline'];

        $query = "UPDATE jobs 
          SET job_title = '$job_title', job_description = '$job_description', career_level = '$career_level', company_name = '$company_name', job_category = '$job_category', qualifications = '$qualifications', proposed_salary = '$proposed_salary', required_skills = '$required_skills', application_deadline = '$application_deadline'
          WHERE Id = '$idnew'";

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
            <form method="POST" action="update_job.php?id_new=<?php echo $id; ?>">
                <<div class="field input">
                    <label for="jobtitle">Job Title</label>
                    <input type="text" name="job_title" autocomplete="off" value="<?php echo $row['job_title'] ?>" required>
                </div>
                <div class="field input">
                    <label for="description">Job Description</label>
                    <textarea rows="15" name="job_description" value="<?php echo $row['job_description'] ?>"></textarea>
                </div>
                <div class="field input">
                    <label for="level">Career Level</label>
                    <select name="career_level" required>
                        <option value="default" disabled='disabled' selected>Select Level</option>
                        <option value="manager">Manager</option>
                        <option value="executive">Executive</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="officer">Officer</option>
                        <option value="assistant">Assistant</option>
                        <option value="trainee">Trainee</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="field input">
                    <label for="company">Company Name</label>
                    <input type="text" name="company_name" autocomplete="off" value="<?php echo $row['company_name'] ?>" required>
                </div>
                <div class="field input">
                    <label for="category">Job Category</label>
                    <select name="job_category" required>
                        <option value="default" disabled='disabled' selected>Select Category</option>
                        <option value="Administration,business and management">Administration,business and management</option>
                        <option value="Computing and IT">Computing and IT</option>
                        <option value="Construction and building">Construction and building</option>
                        <option value="Education and training">Education and training</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Financial">Financial</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Hospitality and tourism">Hospitality and tourism</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Law">Law</option>
                        <option value="Manufacturing and production">Manufacturing and production</option>
                        <option value="Retail and customer Services">Retail and customer Services</option>
                        <option value="Printing,publishing and advertising">Printing,publishing and advertising</option>
                        <option value="Security,uniformed and protective services">Security,uniformed and protective services</option>
                        <option value="Sport and leisure">Sport and leisure</option>
                        <option value="Transport,distibution and logistics">Transport,distibution and logistics</option>
                    </select>
                </div>
                <div class="field input">
                    <label for="qualifications">Qualifications</label>
                    <select name="qualifications" id="qualifications" required>
                        <option value="default" disabled='disabled' selected>Select qualifications</option>
                        <option value="ol">O/L</option>
                        <option value="al">A/L</option>
                        <option value="certificate">Certificate</option>
                        <option value="diploma">Diploma</option>
                        <option value="undergraduate">Undergraduate</option>                     
                        <option value="bachelor">Bachelor</option>
                        <option value="postgraduate">Postgraduate</option>
                    </select>
                </div>
                <div class="field input">
                    <label for="salary">Proposed Salary</label>
                    <input type="text" name="proposed_salary" value="<?php echo $row['proposed_salary'] ?>"autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="skills">Required Skills (Use commas to type more than one skill)</label>
                    <input type="text" name="required_skills" value="<?php echo $row['required_skills'] ?>"  autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="deadline">Application Deadline</label>
                    <input type="date" name="application_deadline" value="<?php echo $row['application_deadline'] ?>" autocomplete="off" required>
                </div>

                <input type="submit" name="update_job"value="Update Job">
            </form>
        </div>
    </div>
</body>
</html>