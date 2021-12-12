<?php
session_start();
?>
<?php

    if(isset($_POST['submit']))
    {
        $pid=$_POST['pid'];
        $i_name=$_POST['inst_name'];
        $co_name=$_POST['course'];
        $b_name=$_POST['branch'];
        $p_year=$_POST['p_year'];
        $cgpa=$_POST['cgpa'];
        $connection=mysqli_connect('localhost','root','','user');
        $query="SELECT * FROM JOB WHERE ID='$pid'";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($result);
        $c_name=$row['company_name'];
        $j_name=$row['job_name'];
        $cid=$row['cid'];
        $sid=$_SESSION['id'];
        $s_name=$_SESSION['NAME'];
        echo $s_name;
        $query1="INSERT INTO HIRE(S_NAME,C_NAME,J_NAME,I_NAME,CO_NAME,B_NAME,P_YEAR,CGPA,SID,CID)";
        $query1 .="VALUES('$s_name','$c_name','$j_name','$i_name','$co_name','$b_name','$p_year','$cgpa','$sid','$cid')";
        $result1=mysqli_query($connection,$query1);
        header("Location: student_index.php");
    }
?>