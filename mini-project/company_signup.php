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
    <form action="signup_company.php" method="post">
        <div class="name">
           <label for="name">
            name
        </label>
        <input type="text" placeholder="name" name="name" required>
        <br>
        </div>
        <label for="doj">
            doj(dd/mm/yyyy)
        </label>
        <input type="date" name="doj" required>
        <br>
        <label for="email">email</label>
        <input type="email" name="email" required>
        <br>
        <label for="psw">
            password
        </label>
        <input type="password" name="psw" placeholder="password" required>
      
        <button type="submit" name="submit">
            signup
        </button>
    </form>
</div>

    
</body>
</html>