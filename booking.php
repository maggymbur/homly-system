<?php
   require 'config.php';
   $email = $_SESSION['email'];
   $query = "SELECT * FROM client WHERE email = '$email'";
   $results =  mysqli_query($conn, $query);
  
   while ($row = $results->fetch_assoc()) {
      $client_id = $row['client_id'];
   }
   // $client_id = $_SESSION['id'];
   $worker_id = $_GET['worker_id'];
   $query = "SELECT * FROM booking WHERE worker_id = '$worker_id' AND client_id = '$client_id'";
   $results =  mysqli_query($conn, $query);
   if(mysqli_num_rows($results) > 0){
      
      echo "<script> alert('This booking has already been made'); </script>";
      echo "<script> window.location.href = 'index.php'; </script>";
   }

   else{
      $query = "INSERT INTO booking VALUES ('$worker_id', '$client_id', 0)";
      mysqli_query($conn, $query); 
      echo "<script> alert('Successfully made the booking! We will reach out via email to seal the hiring.'); </script>";
      echo "<script> window.location.href = 'index.php'; </script>";
   }
?>
