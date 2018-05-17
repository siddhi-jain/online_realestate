<!--NIKITA SONI-->
<!DOCTYPE html>
<!--HOME PAGE-->
<html lang="en">
<!--Head Section Starts-->
<head>
  <title>Home</title>
  -
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--linking bootstrap cdn-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!--linking ajax library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
  
  <!--External css-->
  <link rel="stylesheet" type="text/css" href="css/w3.css" />
  <!--Internal css-->
  <style>
  
  
 #head1{
	background-image: url("images/banner7.jpg");
	background-size:cover;
	height:400px;
	background-repeat:no-repeat;
	clear:both;
}
.w3-bar-block .w3-bar-item {padding:20px}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
	color:black;
} 

footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    
	opacity: 0.7;
    filter: alpha(opacity=70); 
	}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


  </style>
</head>
<!--HEAD Section Ends-->

<!--Body Section starts-->
<body style="background-color:#f0f0f0;">
<!--Nav Bar-->
<nav class="navbar navbar-inverse" ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RealEstateOne</a>
    </div>
    
       <ul class="nav navbar-nav">
     <?php echo  "<li class=\"active\"><a href=\"home2.php\">Home</a></li>";?>
    <?php echo  "<li><a href=\"home2.php\">ABOUT US</a></li>";?>
      
     <?php echo  "<li><a href=\"contact_us.php\">CONTACT US</a></li>";?>
       
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
<?php echo "<li><a href=\"adminlogin.php\"><span class=\"glyphicon glyphicon-user\"></span>Admin Login</a></li>";?>

<?php echo "<li><a href=\"register.php\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>";?>
<!--<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
<?php echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Login</a></li>";?>
    </ul>
  </div>
</nav>
<!--End oF nav bar-->

<!--Head Image-->
<div id="head1">

<!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food" >
    <div class="w3-quarter">
      <img src="images/logo.png" style="width:200px;height:200px;"/>
 </div>
 
<div class="w3-quarter">

<p style="color:navy;font-size:20px;"><i><br/><br/>Not sure, what you need? Contact us or visit our show 
homes to see which homes fit you and your family’s needs. 
Real_Estate_One has a variety of home style options and floorplans to suit you!</i></p>

</div>
</div>
</div>

<br/><br/>
<!--horizontal bar-->
<hr>
<!--images and discriptions-->
<center><h1 >ABOUT REAL_ESTATE_ONE</h1></center>
<hr>
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px; clear: both;">
<div class="w3-row-padding w3-padding-16 w3-center" id="food" >
    <div class="w3-quarter">
      <img src="images/logo.png" style="width:200px;height:200px;"/></div>
	 
Real Estate One started in 2017 by building a single home, and has now grown to be one of Edmonton and Fort McMurray’s leading home builders.<br/> Our townhomes 
and duplexes have always been our trademark homes, but our diverse product selection has grown to include two storey 
single family homes, bungalows and apartment-style condos.
<p>
As the foundation of the REAL_ESTATE_ONE, REAL_ESTATE_ONE Communities is truly a member of the 
communities that we build in. <br/>As an active partner of the Canadian Home Builder Association as 
well as with several various sustainable community and affordable housing initiatives,
 we truly believe in giving back to the communities in which we build.</p>
 <p>

We are kept on our path to continuous improvement thanks due our commitment to building innovation. <br/>
Our home models are constantly evolving, and we are recognized as an industry leader for our unique 
attention to exterior detailing and our efficient use of space inside our homes.<br/>
 We have received multiple awards on local, provincial and national levels including the highly sought-after title
 of Edmonton’s Home Builder of the Year. <br/>
 We pride ourselves on having achieved the right balance of quality and 
 affordability and we ensure that our customers always see the value in owning a Rohit home.
</p>
  <!-- First Photo Grid-->
<!--  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="images/home_styles_duplex.jpg"  style="width:100%">
      <h3>DUPLEX</h3>
      <p>Our famous duplexes look great, both inside and out, and 
	  are a top quality product that you will be proud to call your home.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/home_styles_townhome.jpg"  style="width:100%">
      <h3>Townhouses</h3>
      <p>Our townhouses are all thoughtfully designed to maximize the usable space without 
	  compromising on quality or extra features.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/300x200-SF10_Bristol_Entry1-1.jpg"  style="width:100%">
      <h3>Two Storey/Single Family</h3>
      <p>Be at home in our new two storey single family homes. Detached homes with open concept
	  design to suit all of your lifestyle’s needs. 	</p>
      
    </div>
    <div class="w3-quarter">
      <img src="images/300x200-RC_AspenTrails_Bungalow_Lincoln_Exterior.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Bungalow</h3>
      <p>Our bungalows are carefully designed to provide the best in single-floor living, 
	  and all feature fully completed basements. </p>
    </div>
  </div>
  </div>-->
<!--Horizontal line-->
<hr>
  <br/>
  <br/>
  <!--footer with slide show-->
<footer><div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/banner9.jpg" style="width:100%">
  <div class="text">Your Concern Is Our Priority</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/banner6.jpg" style="width:100%">
  <div class="text">Your Dream Home Awaits</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/banner4.jpg" style="width:100%">
  <div class="text">Where Would You Rather Live?</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</footer>
</body>
<!--Body Section Ends-->
</html>
