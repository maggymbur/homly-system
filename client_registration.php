<?php
require 'config.php';
if(isset($_POST["submit"])){
   $firstName = $_POST["firstName"];
   $middleName = $_POST["middleName"];
   $surname = $_POST["surname"];
   $email = $_POST["email"];
   $phoneNo = $_POST["phoneNo"];
   $service = $_POST["service"];
   $password = $_POST["password"];
   $confirmPassword = $_POST["confirmPassword"];
   $gender = $_POST["gender"];
   $location = $_POST["location"];
   $duplicate = mysqli_query($conn, "SELECT * FROM user_login WHERE email = '$email'");
   if(mysqli_num_rows($duplicate)> 0){
      echo
      "<script> alert('email has already been taken'); </script>";
   }
   else{
      if($password == $confirmPassword){
         $query = "INSERT INTO user_login VALUES('', '$email','$password', 'c')";
         mysqli_query($conn, $query);
         $query = "INSERT INTO client VALUES('', '$firstName', '$middleName', '$surname', '$email', '$phoneNo', '$service', '$gender', '$location' )";
         mysqli_query($conn, $query);
        
         echo
         "<script> alert('registration is successful'); </script>";
         $_SESSION["login"] = true;
         $query = "SELECT id FROM user_login WHERE email='$email'";
         $u_id = mysqli_query($conn, $query);
         $_SESSION["id"]= $u_id;
         $_SESSION["email"] = $email;
         $_SESSION["usertype"]='c';

         header("Location: index.php");
      }
      else{
         echo
         "<script> alert('Password does not match'); </script>";
      }

   }
    
}
?>
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
    h2{
        text-align: center;
    }
    form {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
}

label {
  display: inline-block;
  width: 150px;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="phoneNo"],
select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
  font-size: 16px;
}

input[type="radio"] {
  display: inline-block;
  margin-right: 10px;
}

button[type="submit"],
button[type="reset"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 10px;
}

button[type="submit"]:hover,
button[type="reset"]:hover {
  background-color: #45a049;
}

.error {
  color: red;
  margin-bottom: 10px;
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
            <li> <a href="rate.php">Rate Us</a></li>
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
      <h2>Client Registration Form</h2>

<form method="post" action="" name="registrationForm">
   
   <label for="firstName">First Name:</label>
   <input type="text" id="firstName" name="firstName" required><br><br>

   <label for="middleName">Middle Name:</label>
   <input type="text" id="middleName" name="middleName" required><br><br>

   <label for="Surname"> Surname:</label>
   <input type="text" id="surname" name="surname" required><br><br>

   <label for="email">Email:</label>
   <input type="email" id="email" name="email" required><br><br>

   <label for="phoneNo">Phone number:</label>
   <input type="phoneNo" id="phoneNo" name="phoneNo" required><br><br>


   <label for="Service">Service needed:</label>
		<select id="service" name="service"  required>
			
			<option name="service" value="h">househelp</option>
			<option name="service" value="c">caregiver</option>
			<option name="service" value="n">Nanny</option>
			
		</select><br><br>
     
   <label for="password">Password:</label>
   <input type="password" id="password" name="password" required><br><br>

   <label for="confirmPassword">Confirm Password:</label>
   <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>

   <label for="gender">Gender:</label>
   <input type="radio" id="male" name="gender" value="m" required>
   <label for="male">Male</label>
   <input type="radio" id="female" name="gender" value="f" required>
   <label for="female">Female</label>
   <input type="radio" id="other" name="gender" value="o" required>
   <label for="other">Other</label><br><br>

   <label for="location">location:</label>
   <input type="text" id="location" name="location" required><br><br>


   <button type="submit" name= "submit" value="Submit"> Submit</button>
   <button type="reset" name="reset" value="Reset"> Reset </button>

</form>

<div class="modal" id="termsModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Add your terms and conditions here -->
        <p> 
          <b>TERMS & CONDITIONS</b>
          This is to let you know that <i>Homly website</i> adheres to the laws under the labour act accordin to our constitution
          Also the following laws must be followed:
          <ol>
            <li>In case of a househelp's report of violation or abuse, investigation will be carried out and lawful actions taken</li>
            <li></li>
            <li></li>
          </ol>
        </p>
      </div>
      <div class="modal-footer">
        <!-- Add this code to your form to include a checkbox for terms and conditions -->
      <input type="checkbox" id="terms-checkbox" name="terms-checkbox">
      <label for="terms-checkbox">I agree to the terms and conditions</label>
      <button type="submit" class="btn btn-secondary"onclick="validateForm()"> Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  function validateForm() {
  // check if all fields are filled
  if (document.getElementById("name").value == "" || document.getElementById("email").value == "") {
    alert("Please fill out all fields.");
    return false;
  }

  
}
function showTerms() {
  $('#termsModal').modal('show');
}

function validateForm() {
  // Check if all fields have been filled
  if (document.getElementById("name").value == "" || document.getElementById("email").value == "" || document.getElementById("message").value == "") {
    alert("Please fill in all fields.");
    return false;
  }

  // Check if the terms and conditions have been ticked
  if (!document.getElementById("terms-checkbox").checked) {
    alert("Please tick the terms and conditions.");
    return false;
  }

  // If all conditions are met, submit the form
  document.getElementById("contact-form").submit();
}

const form = document.querySelector('modal');

form.addEventListener('submit', function(event) {
  const agreeCheckbox = document.querySelector('#agree');

  if (!agreeCheckbox.checked) {
    alert('You must agree to the terms and conditions');
    event.preventDefault();
  }
});


</script>
      



</body>
</html>