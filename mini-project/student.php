<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $fn=$_POST['fathername'];
    $gender=$_POST['gender'];
    $psw=$_POST['psw'];
    $pd10=$_POST['10passingdate'];
    $n10=$_POST['10th'];
    $pd12=$_POST['12passingdate'];
    $n12=$_POST['12TH'];
    $connection=mysqli_connect('localhost','root','','user');
    if($connection)
    {
        $query="INSERT INTO STUDENT(NAME,EMAIL,DOB,FATHER_NAME,GENDER,PASSWORD,PASSING_YEAR_10,CGPA_10,PASSING_YEAr_12,PERCENTAGE_12)";
        $query .="VALUES('$name','$email','$dob','$fn','$gender','$psw','$pd10','$n10','$pd12','$n12')"; 
        $sqlquery=mysqli_query($connection,$query);
    }
    else
        die("database not found");
}
?>