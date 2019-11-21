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
							
							<h1 class="headline">My shop</h1>
						</div>
					</selection>
				</nav>
		

				<div id="mySidenav" class="sidenav">

          <a href="#" onclick="showPopUp(2)" id="logare">Inregistrare</a>
          <a href="#" onclick="showPopUp(1)" id="inregistrare">Logare</a>
					<a href="#" onclick="showPopUp(3)"id="contact">Contact</a>
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

    
    <div  class="box" id="LoginPopUp">
        <div id="headLogin">
            <h2>Login</h2>
            <div onclick="closePopUP(1)"id="closePopUpLogin">X</div>
        </div>

          <form autocomplete="off" action="function/login.php" method="POST">
            <div class="inputBox">
              <input type="text" name="username" required="">
              <label>Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required=""> 
                <label>Password</label>
            </div>
            <input type="submit" name="" value="Submit">
          </form>
    </div>



    <div  class="box" id="InregistrarePopUp">
        <div id="headInregistrare">
            <h2>Inregistrare</h2>
            <div onclick="closePopUP(2)" id="closePopUpInregistrare">X</div>
        </div>
        <form autocomplete="off">
              <div class="inputBox">
                <input type="text" name="username" required="">
                <label>Username</label>
              </div>

              <div class="inputBox">
                  <input type="text" name="nume" required="">
                  <label>Nume</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="prenume" required="">
                    <label>Prenume</label>
                  </div>

                  <div class="inputBox">
                      <input type="text" name="email" required="">
                      <label>Email</label>
                  </div>

                  <div class="inputBox">
                      <input type="password" name="password" required=""> 
                      <label>Password</label>
                  </div>
            <input type="submit" name="submitInregistrare" value="Submit">
          </form>
     </div>


     <div  class="box" id="ContactPopUp">
      <div id="headContact">
          <h2>Contact</h2>
          <div onclick="closePopUP(3)"id="closePopUpContact">X</div>
      </div>
      
      <div class="inputBox">
            <label>Numar telefon : 0738574698</label>
        </div>
        <br>
        <div class="inputBox">
              <label>Email: myshop@shop.com</label>
        </div>
          
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