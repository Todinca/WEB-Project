<?php
 session_start();
 if(isset($_SESSION['username']))
 {
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title >My shop</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
	</head>
	<body>

				<nav>
					<selection>
						<div class="hero">
							<h4>Produse</h4>
							<h1 class="headline">My shop</h1>
						</div>
					</selection>
				</nav>
		

				<div id="mySidenav" class="sidenav">

          <a href="ochi.php" id="ochi">Ochi</a>
          <a href="buze.php" id="buze">Buze</a>
          <a href="fata.php" id="fata">Fata</a>
           <a href="function/logout.php" id="logOut">LogOut</a>
        </div>
      
        






<div class="slideshow-container">

    <div class="mySlides fade">
      <img src="img/ii.jpeg" style="width:100%" >
      <div class="headline">My shop</div>
    </div>

    <div class="mySlides fade">
      <img src="img/beauty.jpg" style="width:100%">
      <div class="headline">My shop</div>
    </div>

    <div class="mySlides fade">
      <img src="img/makeup.jpg" style="width:100%">
      <div class="headline">My shop</div>
    </div>
</div>

<br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>


	</body>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <!--<script src="<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"-->
	<script src="js/app.js"></script>

</html>

 <?php
  }else{
    header('Location:index.php');
  }
 ?>