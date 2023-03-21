<?php
   require 'config.php';
   $client_id = $_SESSION['id'];
   $worker_id = $_GET['worker_id'];
   $query = "SELECT * FROM booking WHERE worker_id = '$worker_id' AND client_id = '$client_id'";
   $results =  mysqli_query($conn, $query);
   if(mysqli_num_rows($results) > 0){
      
      echo
      "<script> alert('This booking has already been made'); </script>";
   }

      else{
      $query = "INSERT INTO booking VALUES ('$worker_id', '$client_id', 0)";
      mysqli_query($conn, $query); 
      echo
      "<script> alert('Successfully made the booking'); </script>";
   }

   // header("Location: OurMaids.php");
?>