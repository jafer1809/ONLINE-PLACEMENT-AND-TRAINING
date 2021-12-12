<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="training.css">
</head>
<body>
<h1 class="welcome"> welcome to training and placement</h1>
<hr>
<div class="nav-bar">
   <div class="dropdown">
    <div class="menu">
        <button class="dropbtn">
            menu
        </button>
        <div class="dropdown-content">
            <a href="student_index.php">home</a>
            <a href="profile.php">profile</a>
            <a href="training.php">training</a>
             <a href="hire.php">company</a>
            <a href="capllied.php">company applied </a>
            <a href="https://www.overleaf.com/latex/templates/indian-institute-of-technology-bombay-resume/fgnpzhygqxrq">create your resume</a>
            <a href="index.php">logout</a>
        </div>
    </div>
</div>
        <div class="name">
       
        <?php
        echo $_SESSION['NAME'];
        ?>
    </div>
   
</div>
<div class="box">
<form action="apply.php" method="post">
   <label>post id</label>
    <input type="number" name="pid" required>
    <br>
    <label>institution name</label>
    <input type="text" name="inst_name" required>
        <br>
    <label>course</label>
    <input type="text" name="course" required>
    <br>
    <lable>branch</lable>
    <input type="text" name="branch" required>
    <br>
    <lable> passing year</lable>
    <input type="date" name="p_year" required>
    <br>
    <label> agregate cgpa</label>
    <input type="text" name="cgpa" required>
    <br>
     <div class="submit-button">
        <button type="submit" name="submit">
            apply
        </button>
        </div>
</form>
</div>
    
</body>
</html>