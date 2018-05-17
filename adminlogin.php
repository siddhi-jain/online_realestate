<!doctype html  author siddhi>
<html> 
	<head>
		<meta charset="utf-8">
		<title> Admin Login Form</title>
		<link rel="stylesheet" href="css/login.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         
		 <style>
  
  body
{
	background-image:url("images/back1.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	
}
  </style>
	</head>
	<body>
	
     <nav class="navbar navbar-inverse" ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RealEstateOne</a>
    </div>
    
          <ul class="nav navbar-nav">
 <?php echo  "<li class=\"active\"><a href=\"home2.php\">Home</a></li>";?>
    <?php echo  "<li><a href=\"about_us.php\">ABOUT US</a></li>";?>
      
     <?php echo  "<li><a href=\"contact_us.php\">CONTACT US</a></li>";?>
       
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
<?php echo "<li><a href=\"register.php\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>";?>
<!--<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
<?php echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Login</a></li>";?>
    </ul>
  </div>
</nav>
		<div id="form" align="center"><h1> Admin Log In </h1>
		
					<form action="admin.php" method="get">
						<label for ="uname">Username</label>
						<input type="text" name="uname"  required>
						<br>
						<label for ="password">Password</label>
						<input type="Password" name="password"  required>
						<br>
						<input type="submit" name="ok" value="Log In">
						<br>
						<a href="adminforgot.php">Forget Password</a>
					</form>
				</div>
				
	</body>
</html>