
<?php
if(isset($_POST['upload']))
{
    $filename=$_FILES["uploadfile"]["name"];
    $tempname=$_FILES["uploadfile"]["tmp_name"];
    $folder="image1/".$filename;
    $ques=$_POST['ques'];
    $db=mysqli_connect("localhost","root","","user");
    $sql="insert into photo (filename,ques_name) values('$filename','$ques')";
    mysqli_query($db,$sql);
    if(move_uploaded_file($tempname,$folder))
    {
        $msg="image uploaded succesfully";
    }

    $result=mysqli_query($db,"select * from photo");

    while($data=mysqli_fetch_array($result))
    {
        ?>
        <img src="image1/<?php echo $data['filename']; ?>">
<?php
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
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="uploadfile" value=""/>
    <input type="text" name="ques">
    <button type="submit" name="upload">upload</button>
</form>

    
</body>
</html>
