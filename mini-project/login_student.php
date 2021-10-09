<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
<h1 class="welcome"> welcome to training and placement</h1>
<hr>
<div class="form-login">
<form action="student.php" method="post">
      <div class="email">
       <label for="email">
               <b>
                   email
               </b>
           </label>
           <input type="email" placeholder="enter email" name="email" required>
          
           <label for="psw" >
               <b>
                  <br>
                  <br>
                   password
               </b></label>
               <input type="password" placeholder="enter password" name="psw" required>
              <br>
               </div>
               <div class="submit">
           <button  name="submit">login</button>
           </div>
           <div class="bot">
           <span class="psw">
               forget <a href="#">password?</a>
           </span> 
           <span class="signup">
               ......dont have account??<a href="signup_student.php">signup</a>
           </span>
           </div>
  
</form>
   </div>
    
</body>
</html>