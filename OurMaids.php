<?php 
   require 'config.php';

   $email = $_SESSION["email"];
   // $query = "SELECT services FROM client WHERE email = '$email'";
   $query = "SELECT services FROM client WHERE email = '$email'";
   $service_query = mysqli_query($conn, $query);
   while($row = mysqli_fetch_array($service_query)){
      $service = $row[0];
   };
      
   $query = "SELECT * FROM worker WHERE  skills = '$service'";
   $results = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>
   <link rel="stylesheet" href="./home.css">
   <script src="https://kit.fontawesome.com/3f3b37584c.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="wrapper">
      <div class="sidebar">
         <h2> <i class="fa-solid fa-bars"></i>MENU </h2>
         <br> <br>
         <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./OurMaids.php"><i class="fa-thin fa-magnifying-glass"></i>Our maids/profile</a></li>
            
            <li><a href="./OurServices.php"><i class="fa-regular fa-bell-concierge"></i>Our services</a></li>

            <li><a href="./index.htm"><i class="fa-solid fa-circle-question"></i>How it works</a></li>
           
            <li><a href="feedback.php"><i class="fa-regular fa-comments"></i>Feedback</a></li>
            <li> <a href="#">Rate Us</a></li>
         </ul>
         <br>
         <div class="reachOut">
            <a href=" https://wa.me/707429670"><img src="./whatsapp.avif" style="width: 50px;height:60px"> </a> 
            <a href="www.facebook.com"><img src="./facebook.png" style="width: 60px;height:60px"></a> 
           </div>
            <div class="sign-up">
               <ul>
               <li><a href="logout.php"><i class="fa-duotone fa-right-to-bracket"></i>Logout</a></li>
                  <li><a href="login.php"><i class="fa-duotone fa-right-to-bracket"></i>Login</a></li>
                  <li><a href="registration.php"><i class="fa-light fa-user-plus"></i>Sign up</a></li>
               </ul>
            </div>
            
         </ul>
      </div>
      <div class="main-content">
         <div class="header"><h2>Homly website</h2> <p><i> your one-stop solution for finding reliable and trustworthy househelp services.</i></p>   </div>
         <?php
            echo "<table border = '1px'>";
            while($row= mysqli_fetch_array($results)){
               $worker_id = $row[0];
               $first_name = $row[1];
               $middle_name = $row[2];
               $surname = $row[3];
               $skills = $row[6];
               $location = $row[7];
               $experience = $row[8];
               $gender = $row[9];
            if($skills == 'c'){
                  $skills = "caregiver";
            }
            elseif ($skills == 'h'){
               $skills = "househelp";
               }
               elseif($skills == 'n'){
                  $skills = "nanny";
               } 

               if($gender == 'm'){
                  $gender = "male";
               }
               elseif($gender == 'f'){
                  $gender = "female";
               }
               elseif($gender == 'o'){
                  $gender = "other";
               }
            
               echo "<tr> ";
            
               echo "<td> {$first_name}  </td>"; 
               echo "<td> {$middle_name} </td>"; 
               echo "<td> {$surname} </td>"; 
               echo "<td> {$skills} </td>"; 
               echo "<td> {$location} </td>"; 
               echo "<td> {$experience} </td>"; 
               echo "<td> {$gender} </td>"; 
               echo " <td> <a href = 'booking.php?worker_id=$worker_id'> BOOK </a> </td>";
               echo " </tr>";
               
            }
            echo "</table>";
         ?>
      </div>
      </div>
</body>
</html>