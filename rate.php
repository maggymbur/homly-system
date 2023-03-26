<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> new HOME</title>
   <link rel="stylesheet" href="home.css">
   <script src="https://kit.fontawesome.com/3f3b37584c.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
   <style> 
   
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  
.stars {
	display: flex;
	justify-content: center;
	align-items: center;
	margin-top: 50px;
}

/* Increasing the size of the stars */
.star {
	font-size: 100px;
	color: #FFD700;
	cursor: pointer;
}

/* Styling for the stars when they are empty */
.star.empty {
	color: #ccc;
}
   </style>
  
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

            <li><a href="./howItWorks.php"><i class="fa-solid fa-circle-question"></i>How it works</a></li>
            
            <li><a href="./feedback.php"><i class="fa-regular fa-comments"></i>Feedback</a></li>

            <li> <a href="./rate.php">Rate Us</a></li>
         
         <div class="reachOut">
          <a href=" https://wa.me/707429670"><img src="./images/whatsapp.avif" style="width: 50px;height:60px"> </a> 
          <a href="www.facebook.com"><img src="./images/facebook.png" style="width: 60px;height:60px"></a> 
         </div>
            <div class="sign-up">
               <ul>
               <li><a href="logout.php"><i class="fa-duotone fa-right-to-bracket"></i>Logout</a></li>
                  <li><a href="./login/logins.php"><i class="fa-duotone fa-right-to-bracket"></i>Login</a></li>
                  <li><a href="./signup.htm"><i class="fa-light fa-user-plus"></i>Signup</a></li>
               </ul>
            </div>
            
         </ul>
      </div>
      <div class="main-content">
        <h1 style="color:violet;text-align:center;">Please rate this page:</h1>

	<!-- Five star rating system -->
    <div class="stars">
         <span class="star empty">&#9734;</span>
	     <span class="star empty">&#9734;</span>
	     <span class="star empty">&#9734;</span>
	     <span class="star empty">&#9734;</span>
	      <span class="star empty">&#9734;</span>

    </div>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/househelp.jpg" class="d-block w-100" alt="image">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/househelp3.jpg" class="d-block w-100" alt="image">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/caregiver2.jpg" class="d-block w-100" alt="...">
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


   <script>
       // Function to handle the star rating system
function handleRating(rating) {
	// Reset all stars to empty
	document.querySelectorAll('.star').forEach(function(star) {
		star.classList.add('empty');
	});

	// Fill in the selected number of stars
	for (var i = 0; i < rating; i++) {
		document.querySelectorAll('.star')[i].classList.remove('empty');
	}

	// Display alert message
	alert("Thanks for rating this page!");
}

// Add event listeners to the stars to handle clicks
document.querySelectorAll('.star').forEach(function(star, index) {
	star.addEventListener('click', function() {
		handleRating(index + 1);
	});
});
   </script>
  
</body>
</html>