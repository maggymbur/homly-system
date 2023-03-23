<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="home.css">
   <script src="https://kit.fontawesome.com/3f3b37584c.js" crossorigin="anonymous"></script>
   <style>
    .register {
        border: 1px solid #ccc; 
        padding: 20px; 
        width: 500px; 
        margin: 0 auto;
        margin-top: 100px;
        
    }
    
    h1 {
        font-size: 36px; 
        text-align: center; 
    }
    
    a {
        display: block; 
        margin: 10px 0; 
        font-size: 24px; 
        text-align: center; 
        text-decoration: none; 
    }
    
    a:hover {
        background-color: #f2f2f2; 
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

            <li><a href="./index.htm"><i class="fa-solid fa-circle-question"></i>How it works</a></li>
            
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
      <div class="main-content">
         
            <div class= "register">
            <h1>  do you want to register as a client or workers? </h1>
            <a href="client_registration.php"> client </a><br>
            <a href="worker_registration.php"> worker </a>
            </div>
         
             
      </div>
    
       
         
     
   </div>
      


      


</body>
</html>