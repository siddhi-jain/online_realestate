<! doctype html author siddhi>

<html lang="en">
<head>
  <title>Sign Up</title>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href ="css/reg.css" type="text/css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  
  body
{
	background-image:url("images/back.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	
}
  </style>
</head>
<body >

<nav class="navbar navbar-inverse" ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RealEstateOne</a>
    </div>
    
       <ul class="nav navbar-nav">
      <li class="active"><a href="home2.php">Home</a></li>
      <li><a href="about_us.php">ABOUT US</a></li>
      
      <li><a href="contact_us.php">CONTACT US</a></li>
       
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>



<div id="form" >
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";}
		else{
			$db=mysql_select_db("dbms",$con);
		}
		
		if(isset($_GET["ok"]))
		{
			$i=$_GET['id'];
			$q=mysql_query("select eid,password from user where userid='$i' ",$con);
			if($q){
				
				if(mysql_num_rows($q)==1){
					$r=mysql_fetch_array($q);
					$msg="Dear RealEstateOne user we have recieved a forgot password request from you...\n If it is not you who have requested immediately call on toll free number 1800-2245-7899 \n Following are the required details \n User Id :";
					$msg.=$i;
					$msg.="\nPassword:";
					$msg.=$r['password'];
					
					$headers = "From: RealEstateOne.com" . "\r\n" ;
					mail($r['eid'], "Reset password",$msg,$headers);
					echo"
					<font color=\"blue\" size=24 > <p align=\"center\">An email has been sent to you registered email id <br>Check your email<p></font>
					<br>
					<a href=\"login.php\">Go back to login page? </a>";
				}
				else{
					echo "<font color=\"blue\" size=30 ><b><p align=\"center\">User id does not exist</p></b></font> " ;
				}
			}
			else{
				echo "
				<p  align=\"center\">
				<font color=\"red\" size=36>
				Oops some error occured!!!
				</font>
				<br>
				<a href =\"login.php\" >Retry</a>
				</p>
				";
				
			}
			}
		
		
		
		else{
			echo "
				<h1 align=\"center\" >Forgot Password </h1>
				<br>  <br>
				<form action =\"forgot.php\" method=\"get\">
				<p>
				<table  align=\"center\">
				
				<tr>
				<p>
				<td><label for =\"id\">Enter your user id</label></td>
				<td><input type =\"text\" name=\"id\" required ></td>
				</p>
				</tr>
				</table>
				
				<p align=\"center\">
				<td  ><input type =\"submit\" name=\"ok\" value =\"submit\"></td>
				</p>
				
				
				</p>
				</form>
				";
		}
		
		?>
</div>

</body>
</html>