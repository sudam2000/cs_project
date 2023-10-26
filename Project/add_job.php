<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $career_level = $_POST['career_level'];
    $company_name = $_POST['company_name'];
    $job_category = $_POST['job_category'];
    $qualifications = $_POST['qualifications'];
    $proposed_salary = $_POST['proposed_salary'];
    $required_skills = $_POST['required_skills'];
    $application_deadline = $_POST['application_deadline'];

    $insert_query = "INSERT INTO jobs (job_title, job_description, career_level, company_name, job_category, qualifications, proposed_salary, required_skills, application_deadline ) 
    VALUES ('$job_title','$job_description', '$career_level', '$company_name', '$job_category', '$qualifications', '$proposed_salary', '$required_skills', '$application_deadline')";
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
            <h1>Add Job</h1>
            <form method="POST" action="add_job.php">
                <<div class="field input">
                    <label for="job_title">Job Title</label>
                    <input type="text" name="job_title" id="job_title" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="job_description">Job Description</label>
                    <textarea rows="15" name="job_description"></textarea>
                </div>
                <div class="field input">
                    <label for="career_level">Career Level</label>
                    <select name="career_level" id="level" required>
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
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" id="company" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="job_category">Job Category</label>
                    <select name="job_category" id="category" required>
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
                    <label for="proposed_salary">Proposed Salary</label>
                    <input type="text" name="proposed_salary" id="salary" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="required_skills">Required Skills (Use commas to type more than one skill)</label>
                    <input type="text" name="required_skills" id="required_skills" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="application_deadline">Application Deadline</label>
                    <input type="date" name="application_deadline" id="application_deadline" autocomplete="off" required>
                </div>
                <div>
                <input type="submit" value="Add job">
                </div>
                
            </form>
            <div class="link">
                <a href="admin_home.php">Back to Admin Page</a>
            </div>
        </div>
    </div>
</body>
</html>
