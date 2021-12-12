<?php
session_start();
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
    if(isset($_POST['submit']))
    {
        $connection=mysqli_connect('localhost','root','','user');
        $job_name=$_POST['job_name'];
        $total_post=$_POST['total_post'];
        $cname=$_SESSION['NAME'];
        $cid=$_SESSION['id'];
        if($connection){
        $query="INSERT INTO JOB(COMPANY_NAME,JOB_NAME,TOTAL_POST,CID)";
        $query .="VALUES('$cname','$job_name','$total_post','$cid')";
        $a=$sqlquery=mysqli_query($connection,$query);
        header("Location: company_index.php");
        }
        else
            die("database not found");
    }
?>