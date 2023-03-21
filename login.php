<?php
require 'config.php';
if(isset($_POST["login"])){
   $email = $_POST["email"];
   $password = $_POST["password"];
   $result = mysqli_query($conn, "SELECT * FROM user_login WHERE email = '$email' ");
   $row = mysqli_fetch_assoc($result);
   if(mysqli_num_rows($result)>0){
      if($password== $row["password"]){
         // if (!isset($_SESSION['login'])){
         $_SESSION["login"] = true;
         $_SESSION["id"]= $row["id"];
         $_SESSION["email"] = $email;
         $_SESSION["usertype"]=$row["usertype"];
         
         header("Location: index.php");
      }
      else{
         echo
         "<script> alert('wrong password')</script>";
      }

   }
   else{
      echo
      "<script> alert('User not registered')</script>";
   }
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="home.css">
   <script src="https://kit.fontawesome.com/3f3b37584c.js" crossorigin="anonymous"></script>
   <style>
     form {
        background-color: #fff;
        width: 300px;
        padding: 20px;
        margin: 50px auto;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    
    input[type="text"],
    input[type="password"] {
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        background-color: #f1f1f1;
        width: 100%;
        box-sizing: border-box;
        font-size: 16px;
    }
    
   .login {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }
    
    .login:hover {
        background-color: red;
    }
    
    
   </style>
</head>
<body>

<div class="wrapper">
      <div class="sidebar">
         <h2> <i class="fa-solid fa-bars"></i>MENU </h2>
         <br> <br>
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href= "<?php echo $_link; ?>"> <i class="fa-thin fa-magnifying-glass"></i>Our maids/profile</a></li>
            <li><a href="./OurServices.php"><i class="fa-regular fa-bell-concierge"></i>Our services</a></li>

            <li><a href="./howItWorks.php"><i class="fa-solid fa-circle-question"></i>How it works</a></li>
            
            <li><a href="feedback.php"><i class="fa-regular fa-comments"></i>Feedback</a></li>
            <li> <a href="#">Rate Us</a></li>
         <br>
         <div class="reachOut">
          <a href=" https://wa.me/707429670"><img src="./whatsapp.avif" style="width: 50px;height:60px"> </a> 
          <a href="www.facebook.com"><img src="./facebook.png" style="width: 60px;height:60px"></a> 
         </div>

            <div class="sign-up">
               <ul>
                  <li><a href="logout.php"><i class="fa-light fa-user-plus"></i>Log out</a></li>
                  <li><a href="login.php"><i class="fa-duotone fa-right-to-bracket"></i>Login</a></li>
                  <li><a href="registration.php"><i class="fa-light fa-user-plus"></i>Sign up</a></li>
                 
               </ul>
            </div>
            
         </ul>
      </div>
   <form method="post" action="" name="loginForm">
   <label for="email"> email:</label>
   <input type="text" id="email" name="email" required><br><br>

   <label for="password"> password:</label>
   <input type="password" id="password" name="password" required><br><br>

   <button class="login" name= "login" value="login"> Login</button><br></br>
   <a href="registration.php"> Register </a><br></br>
 <a href="#!">Forgot password?</a><br><br>
    </form>
</div>
</body>
</html>