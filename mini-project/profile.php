
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    include("student.php");
?>
    <label for="name">name</label>
<?php
echo $_SESSION['NAME'];
?>

    
</body>
</html>