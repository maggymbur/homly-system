<?php
   require 'config.php';
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
   if(isset($_SESSION["login"])){
      if($_SESSION["login"]){
         $query = "SELECT first_name FROM worker WHERE email = '$email'";
         $result = mysqli_query($conn, $query);
         $name = mysqli_fetch_array($result);
         $home_msg = "Welcome ";
      }
      else{
         $home_msg = "Homly website";
      }
   }
   else{
      $home_msg = "Homly website";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>
   <link rel="stylesheet" href="home.css">
   <script src="https://kit.fontawesome.com/3f3b37584c.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      <div class="main-content">
         <div class="header"><h2><?php echo "$home_msg";?></h2> <p><i> your one-stop solution for finding reliable and trustworthy househelp services.</i></p>   </div>
         <div class="info"> Welcome to Homly Househelp website, your one-stop solution for finding reliable and trustworthy househelp services.<br>
             We understand how busy life can get, and how difficult it can be to juggle work, family, and household chores all at once.
              This is where we come in, to make your life easier and more convenient. </div> <br></br>
              <div >
                <button class="btn-1"><a href="./login.htm" style="text-decoration:none; color: black;" >Get started</a></button>
            </div><br><br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/househelp3.jpg" class="d-block w-100" alt="image">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/caregiver2.jpg" class="d-block w-100" alt="image">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/homly2.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button  class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
              </div>
         
             
      </div>
    
       
         
     
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</body>
</html>