<?php
   require 'config.php';
   $worker_id = $_SESSION['id'];
   $client_id = $_GET['client_id'];

   // $query = "UPDATE booking SET accepted='"/$_POST[1]"' WHERE  "
   $bool_ = 1;
   $query = "UPDATE `booking` SET `accepted`='[$bool_]' WHERE worker_id='$worker_id' AND client_id='$client_id'";
   mysqli_query($conn, $query);

   $query = "SELECT * FROM worker WHERE worker_id = '$worker_id' ";
   $worker_results =  mysqli_query($conn, $query);
   $worker = mysqli_fetch_array($worker_results);

   $query = "SELECT * FROM client WHERE client_id = '$client_id' ";
   $client_results =  mysqli_query($conn, $query);
   $client = mysqli_fetch_array($client_results);

   echo
   "<script> alert('TODO: NEED TO IMPLEMENT EXCHANGE OF INFORMATION e.g client f_name='$client[1]', worker f_name='$worker[1]'); </script>";
   

   header("Location: profile.php");
?>