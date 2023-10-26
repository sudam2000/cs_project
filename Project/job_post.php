<?php

include("php/config.php");

// Process the form data
if (isset($_POST['submit'])) {
    $jobTitle = $_POST['jobtitle'];
    $jobDescription = $_POST['description'];
    $careerLevel = $_POST['level'];
    $companyName = $_POST['company'];
    $jobCategory = $_POST['category'];
    $qualifications = $_POST['qualifications'];
    $proposedSalary = $_POST['salary'];
    $requiredSkills = $_POST['skills'];
    $applicationDeadline = $_POST['deadline'];

    // Insert data into the database
    $query = "INSERT INTO jobs (job_title, job_description, career_level, company_name, job_category, qualifications, proposed_salary, required_skills, application_deadline)
              VALUES ('$jobTitle','$jobDescription','$careerLevel','$companyName','$jobCategory','$qualifications','$proposedSalary','$requiredSkills','$applicationDeadline')";
    if (mysqli_query($con, $query)) {
        echo "User added successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">    
    <title>Post a Job</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Post a Job </header>
            <form action="" method="post">
                <div class="field input">
                    <label for="jobtitle">Job Title</label>
                    <input type="text" name="jobtitle" id="jobtitle" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="description">Job Description</label>
                    <textarea rows="15" name="description"></textarea>
                </div>
                <div class="field input">
                    <label for="level">Career Level</label>
                    <select name="level" id="level" required>
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
                    <input type="text" name="company" id="company" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="category">Job Category</label>
                    <select name="category" id="category" required>
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
                    <input type="text" name="salary" id="salary" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="skills">Required Skills (Use commas to type more than one skill)</label>
                    <input type="text" name="skills" id="skills" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="deadline">Application Deadline</label>
                    <input type="date" name="deadline" id="deadline" autocomplete="off" required>
                </div>
                <div class="field">                    
                    <input type="submit" class="btn" name="submit" value="Post" required>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


