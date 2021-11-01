<?php
session_start();
?>
<?php

    if(isset($_POST['submit']))
    {
        echo "hii";
        $connection=mysqli_connect('localhost','root','','user');
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $query="select * from student";
        if($connection){
        $result=mysqli_query($connection,$query);
            $t=0;
        while($row=mysqli_fetch_assoc($result))
        {
            if($row['password']==$psw && $row['email']==$email)
            {
                $_SESSION['NAME']=$row['name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['dob']=$row['dob'];
                $_SESSION['father']=$row['father_name'];
                $_SESSION['gender']=$row['gender'];
                $_SESSION['passing10']=$row['passing_year_10'];
                $_SESSION['cgpa10']=$row['cgpa_10'];
                $_SESSION['passing12']=$row['passing_year_12'];
                $_SESSION['cgpa12']=$row['percentage_12'];

                $t=1;
            header("Location: student_index.php");
            }
            
             
        }
        if($t==0)
        { 
                $error="email or password is wrong";
                    header("Location: login_student.php");
            echo $error;
        }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<a href="profile.php">profile</a>


    
</body>
</html>