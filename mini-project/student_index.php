<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="studen_index.css">
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
            <a href="#">training</a>
            <a href="#">company</a>
            <a href="#">company applied </a>
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

   
</body>
</html>