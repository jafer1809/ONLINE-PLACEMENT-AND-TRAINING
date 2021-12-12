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
   <table>
    <tr>
        <td class="heading"> student name</td>
        <td class="heading">job name</td>
        <td class="heading">institution name</td>
        <td class="heading">course</td>
        <td class="heading">branch</td>
        <td class="heading">passing year</td>
        <td class="heading">cgpa</td>
    </tr>
   
    <?php
        $connection=mysqli_connect('localhost','root','','user');
        $SID=$_SESSION['id'];
        $query="SELECT * FROM HIRE WHERE CID='$SID'";
         $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $row['s_name']; ?></td>
                <td><?php echo $row['j_name']; ?></td>
                <td><?php echo $row['i_name']; ?></td>
                <td><?php echo $row['co_name']; ?></td>
                <td><?php echo $row['b_name']; ?></td>
                <td><?php echo $row['p_year']; ?></td>
                <td><?php echo $row['cgpa']; ?></td>
            </tr>
    <?php
        }
    ?>
    
    
    
</table>  
    </body>
</html>