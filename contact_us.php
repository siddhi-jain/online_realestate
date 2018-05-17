<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact US </title>
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="css/contact_us.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--linking bootstrap cdn-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!--linking ajax library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	body{
background-image: url("images/4.jpg");
repeat:no;
}
	</style>
</head>
<body>
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
<?php echo "<li><a href=\"register.php\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>";?>
<!--<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
<?php echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Login</a></li>";?>
<?php echo "<li><a href=\"adminlogin.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Admin Login</a></li>";?>
    </ul>
  </div>
</nav>
<!--End oF nav bar-->

<?php
      $con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";}
		else{
			$db=mysql_select_db("dbms",$con);
		}

?>

<div class="wrapper">
  <h1>Contact US</h1>
  <div class="address">
    <div class="inner-address">
      <i class="fas fa-map-marker-alt"></i>
      <p>RealEstateOne<br/> Bhopal,M.P. ,India</p>
    </div>
    <div class="inner-address">
      <i class="fas fa-envelope"></i>
      <p>RealEstateOne@gmail.com</p>
    </div>
    <div class="inner-address">
      <i class="fas fa-phone-volume"></i>
      <p>+91 8989229026</p>
    </div>
  </div>
  <?php 
  if(isset($_GET['ok']))
  {
	  $n=$_GET['n'];
	  $eid=$_GET['eid'];
	  $msg=$_GET['msg'];
	  $r=mysql_query("select max(number)as maxno from contact",$con);
	  $s=mysql_fetch_array($r);
	  $c=$s['maxno'];
	  $c=$c+1;
	  $q=mysql_query("insert into contact values('{$c}','{$n}','{$eid}','{$msg}') ",$con);
	  if($q){
		  echo"
		  <p align=\"center\" font-color=\"black\" font-size= 24>
		  Thank you for your message....<br> We will contact you shortly
		  </p>
		  
		  ";
	  }
  }
else{
	echo"
  <div class=\"form\">
    <div class=\"form-title\">
      Leave us your precious message
    </div>
	<form action=\"contact_us.php\" method=\"get\">
    <div class=\"input-form\">
      <div class=\"input\">
        <input type=\"text\" name=\"n\" placeholder=\"Name\" required>
		  <br>
      </div>
	
      <div class=\"input\">
        <input type=\"text\" name=\"eid\" placeholder=\"Email\" required>
      </div>
    </div>
    <div class=\"inner-msg\">
      <div class=\"msg\">
        <textarea name=\"msg\" placeholder=\"Message\" required></textarea>
      </div>
    </div>
    <div class=\"btn\">
	<p align=\"center\">
     <input type=\"submit\" name=\"ok\" value=\"Send Message\" >
	 </p>
    </div>
	</form> 
	</div>";

}
?>
  
  
  
  <div class="social">
    <div class="inner-social">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin-in"></i>
    </div>
    <div class="inner-social">
      <i class="fab fa-google-plus-g"></i>
      <i class="fab fa-reddit-alien"></i>
      <i class="fab fa-whatsapp"></i>
    </div>
  </div>
</div>
	
</body>
</html>