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
            <a href="company_index.php">home</a>
          
            <a href="post.php">post job</a>
             <a href="student_applied.php">student applied</a>
            <a href="upload.php">post quotes</a>
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
    <form action="post_backend.php" method="post">
       <label for="post name">
           job name
       </label>
        <input type="text" name="job_name" required>
        <label for="total post">
            total post
        </label>
        <input type="number" name="total_post" required>
        <div class="submit-button">
        <button type="submit" name="submit">
            post job
        </button>
        </div>
    </form>
</div>
   
</body>
</html>