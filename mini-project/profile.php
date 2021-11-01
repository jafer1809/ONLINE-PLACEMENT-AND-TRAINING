
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<h1 class="welcome"> welcome to training and placement</h1>
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
<table>
    <tr>
        <td class="heading">name</td>
        <td><?php
echo $_SESSION['NAME'];
?></td>
    </tr>
    <tr>
        <td class="dob">email</td>
        <td><?php
echo $_SESSION['email'];
?></td>
    </tr>
    <tr>
       <td  class="dob">date of birth</td> 
       <td><?php
echo $_SESSION['dob'];
?></td>
    </tr>
    <tr>
       <td  class="dob">father name</td> 
       <td><?php
echo $_SESSION['father'];
?></td>
    </tr>
    <tr>
       <td  class="dob">gender</td> 
       <td><?php
echo $_SESSION['gender'];
?></td>
    </tr>
    <tr>
       <td  class="dob">10th passing year</td> 
       <td><?php
echo $_SESSION['passing10'];
?></td>
    </tr>
    <tr>
       <td  class="dob">cgpa 10</td> 
       <td><?php
echo $_SESSION['cgpa10'];
?></td>
    </tr>
    <tr>
       <td  class="dob">12th passing year</td> 
       <td><?php
echo $_SESSION['passing12'];
?></td>
    </tr>
    <tr>
       <td  class="dob">12 percentage</td> 
       <td><?php
echo $_SESSION['cgpa12'];
?></td>
    </tr>
    
</table>

    
</body>
</html>