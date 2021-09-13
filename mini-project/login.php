<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
   <form action="action_page.php" method="post">
       <div class="imgcontainer">
           <img src="login.jpg" alt="avatar" class="avatar">
       </div>
       <div class="container">
           <label for="email">
               <b>
                   email
               </b>
           </label>
           <input type="email" placeholder="enter email" name="email" required>
           <label for="psw" >
               <b>
                   password
               </b></label>
               <input type="password" placeholder="enter password" name="psw" required>
              
           <button type="submit">login</button>
            <span class="signup">
           <a href="signup.php"><img src="signup.png"> </a>
           </span>
           <span class="psw">
               forget <a href="#">password?</a>
           </span> 
       </div>
    
   </form>
   
</body>
</html