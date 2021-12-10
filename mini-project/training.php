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
    <a href="c++.php"><img src="c++.png"></a>
    <a href="java.php"><img src="java.png"></a>
    <a href="python.php"><img src="python.jpg"></a>
    <a href="sql.php"><img src="sql.png"></a>
    <a href="data_structure.php"><img src="data_structure.jpg"</a>

    
</body>
</html>