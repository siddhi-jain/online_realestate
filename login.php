<?php
session_start();
if(isset($_POST['bttlogin'])){
	require 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($bd,"SELECT * FROM user WHERE userid='$username' AND password='$password'");
	if(mysqli_num_rows($result)==1){
		$_SESSION['username'] = $username;
		$_SESSION['password']= $password;
		header('Location: welcome.php');
	}
	else {
		echo "Accounts Invalid";
	}
}
?>
<!doctype html>
<html> 
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<link rel="stylesheet" href="css/login.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         
		 <style>
  
  body
{
	background-image:url("images/back.jpg");
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

<?php echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>";?>
<?php echo "<li><a href=\"adminlogin.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Admin Login</a></li>";?>
    </ul>
  </div>
</nav>
	  </div>
	</nav>
	<div id="form" align="center"><h1>Log In</h1>
		
		
			
					<form name="loginform" action="login.php?action=login" method="post">
					<!--the code bellow is used to display the message of the input validation-->
    		 <?php
    			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    			echo '<ul class="err">';
    			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    				echo '<li>',$msg,'</li>'; 
    				}
    			echo '</ul>';
    			unset($_SESSION['ERRMSG_ARR']);
    			}
    		?>
						<label for ="uname">Username</label>
						<input type="text" name="username" placeholder="Online">
						<br>
						<label for ="password">Password</label>
						<input type="Password" name="password" placeholder="">
						<br>
						<input type="submit" name="bttlogin" value="Log In">
						<br>
						<a href="forgot.php">Forget Password</a>
					</form>
				</div>
			
		
	</body>
</html>