<?php
session_start();
?>
<?php
    if(isset($_POST['submit']))
    {
        $connection=mysqli_connect('localhost','root','','user');
        $text=$_POST['text'];
        $name=$_SESSION['NAME'];
        if($connection){
        $query="INSERT INTO POST(NAME,POST) VALUES('$name','$text')";
        $a=mysqli_query($connection,$query);
        
        }
    }
?>
<script>
alert("uploaded");
</script>