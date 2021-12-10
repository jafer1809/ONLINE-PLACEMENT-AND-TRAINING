<?php
if(isset($_POST['submit']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['psw'];
    $doj=$_POST['doj'];
    $connection=mysqli_connect('localhost','root','','user');
    if($connection)
    {
        $query="INSERT INTO COMPANY(name,email,doj,psw) VALUES('$name','$email','$doj','$password')";
        mysqli_query($connection,$query);
        header("Location: login_company.php");
    }
}
?>
