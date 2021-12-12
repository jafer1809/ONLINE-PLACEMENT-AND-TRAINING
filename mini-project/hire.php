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
<table>
    <tr>
        <td class="heading">postid</td>
        <td class="heading"> company name</td>
        <td class="heading">job type</td>
        <td class="heading"> total no of post</td>
    </tr>
   
    <?php
        $connection=mysqli_connect('localhost','root','','user');
        $query="SELECT * FROM JOB";
         $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['company_name']; ?></td>
                <td><?php echo $row['job_name']; ?></td>
                <td><?php echo $row['total_post']; ?></td>
            </tr>
    <?php
        }
    ?>
    
    
    
</table> 
<div class="apply">
        <a href="applyh.php">apply</a>
    </div> 
</body>
</html>