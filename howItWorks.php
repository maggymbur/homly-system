<?php
 if(isset($_SESSION["usertype"])){
   $email = $_SESSION["email"];
   if($_SESSION["usertype"]== 'c'){
      $_link="./OurMaids.php";
   }
   elseif($_SESSION["usertype"]== 'w'){
      $_link="./profile.php";
   }
}
else{
   $_link ="login.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Homly/how it works</title>
   <link rel="stylesheet" href="./home.css">
   <script src="https://kit.fontawesome.com/3f3b37584c.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="wrapper">
      <div class="sidebar">
         <h2> <i class="fa-solid fa-bars"></i>MENU </h2>
         <br> <br>
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="./OurMaids.php"><i class="fa-thin fa-magnifying-glass"></i>Our maids/profile</a></li>
            
            <li><a href="./OurServices.php"><i class="fa-regular fa-bell-concierge"></i>Our services</a></li>

            <li><a href="./howItWorks"><i class="fa-solid fa-circle-question"></i>How it works</a></li>
            <li><a href="feedback.php"><i class="fa-regular fa-comments"></i>Feedback</a></li>
            <li> <a href="rate.php">Rate Us</a></li>
            <br>
            <div class="reachOut">
               <a href=" https://wa.me/707429670"><img src="./images/whatsapp.avif" style="width: 50px;height:60px"> </a> 
               <a href="www.facebook.com"><img src="./images/facebook.png" style="width: 60px;height:60px"></a> 
              </div>
            <div class="sign-up">
               <ul>
               <li><a href="logout.php"><i class="fa-duotone fa-right-to-bracket"></i>Logout</a></li>
                  <li><a href="#"><i class="fa-duotone fa-right-to-bracket"></i>Login</a></li>
                  <li><a href="#"><i class="fa-light fa-user-plus"></i>Sign up</a></li>
               </ul>
            </div>
            
         </ul>
      </div>
      <div class="main-content">
         <div class="header"><h2>Homly website</h2> <p><i> your one-stop solution for finding reliable and trustworthy househelp services.</i></p>   </div>
         <div class="info">
         <div class="pic1">

           <p> Our team of professionals is dedicated to ensuring that you get the best possible experience when you use our website.
             Our website is user-friendly, and you can easily find the service you need, with just a few clicks.</p>
            <br>
           
         <div class="pic2">How we work:
            <ol style="color:mediumslateblue;">
               <li>You start by creating an account by filling in important details that we use when providing the househelp of your choice.</li>
               <li> Then head to <a href="./OurMaids.html">Our maids </a> where there is a vast number of househelps, nannies and caregivers all aligned for you to choose.</li>
               <li>Select a househelp that best suites your preferences, workload and wage gap by clicking <b>SUBMIT</b></li>
               <li></li>
            </ol>
              



            
         </div>
         <br> <br>
         <p> We are committed to ensuring that you get the best househelp services possible,
            which is why we take the time to vet and verify all our househelps.
             We conduct thorough background checks and interviews to ensure that they are reliable, trustworthy, and experienced.</p>
           <br>
           We take pride in our commitment to customer satisfaction, which is why we offer a 100% satisfaction guarantee.
            If you are not satisfied with the service provided, we will work with you to ensure that your needs are met.And you can write to us [<a href="#">feedback</a>]</div>
            <br>
         <div class="pic3"></div>
      </div>
   </div>
</body>
</html>