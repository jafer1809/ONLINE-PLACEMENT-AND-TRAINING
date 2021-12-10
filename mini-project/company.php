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
        $query="select * from company";
        if($connection){
        $result=mysqli_query($connection,$query);
            $t=0;
        while($row=mysqli_fetch_assoc($result))
        {
            if($row['psw']==$psw && $row['email']==$email)
            {
                $_SESSION['NAME']=$row['name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['dob']=$row['dob'];
                $_SESSION['id']=$row['id'];
                

                $t=1;
            header("Location: company_index.php");
            }
            
             
        }
        if($t==0)
        { 
                $error="email or password is wrong";
            echo $error;
            
                    header("Location: login_student.php");
            
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