<?php 
   include("php/config.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Help</title>
<link rel="stylesheet" href="style/style_help.css">

</head>
<body>

<div class="topnav">
  <h3>How can we help you ?</h3>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<div class="container">
    <div class="box form-box">
        <header>Get a Demo for Q&A Session </header>
        <form action="" method="post">
            <div class="field input">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="number">Contact Number</label>
                <input type="text" name="number" id="numbner" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="description">Tell us what you need?</label>
                <textarea rows="15" name="description"></textarea>
            </div>
            <div class="field">                    
                    <input type="submit" class="btn" name="submit" value="Submit" required>
                </div>
            </form>
            </div>
            <img src="images/img.jpg" width="45%" height="45%">
        </div>
</body>
</html>
