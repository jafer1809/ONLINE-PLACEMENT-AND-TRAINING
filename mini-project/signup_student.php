<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<h1 class="welcome"> welcome to training and placement</h1>
<hr>
<div class="box">
    <form action="student_signup.php" method="post">
        <div class="name">
           <label for="name">
            name
        </label>
        <input type="text" placeholder="name" name="name" required>
        <br>
        </div>
        <label for="father name">
            father name
        </label>
        <input type="text" placeholder="father name" name="fathername" required>
        <br>
        <label for="dob">
            dob(dd/mm/yyyy)
        </label>
        <input type="date" name="dob" required>
        <br>
        <label for="email">email</label>
        <input type="email" name="email" required>
        <br>
        <label for="gender">
           gender   
        </label>
         <input type="radio" name="gender" value="male" r>male
            <input type="radio" name="gender" value="female" >female
            <input type="radio" name="gender" value="other">other<br>
        <label for="psw">
            password
        </label>
        <input type="password" name="psw" placeholder="password" required>
        <label for="10passing year">
            <br>10th passing year
        </label>
        <input type="number" name="10passingdate" required>
        <lable for="class 10">
            <br>class 10th(cgpa)
        </lable>
        <input type="number" name="10th" placeholder="10th cgpa">
        <label for="12passing year">
            <br>12th passing year
        </label>
        <input type="number" name="12passingdate" required>
        <lable for="class 10">
            <br>class 12th(%)
        </lable>
        <input type="number" name="12TH" placeholder="12th cgpa">
        <button type="submit" name="submit">
            signup
        </button>
    </form>
</div>

    
</body>
</html>