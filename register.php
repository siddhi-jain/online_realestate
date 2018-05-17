<! doctype html author siddhi>
<?php session_start()?>
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


<div id="heads" >
<div id="form" >
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";}
		else{
			$db=mysql_select_db("dbms",$con);
		}

		if(isset($_GET['ok1'])){
			
			$a=$_GET['aadhar'];
			$q=mysql_query("select * from aadhar where aadharno='$a'",$con);
			if(!$q)
			{
				echo "
				<h1>
				<p align=\"center\">
				<font color=\"blue\" font-size:24 font-weight:bold >
				Invalid aadhar number <br> 
				<br><br>
				<a href =\"register.php\" ><u>Retry?</u></a>
				</font>
				</p>
				</h1>
				";
			}
			else{
				$q=mysql_query("select * from user where aadharno='$a' ",$con);
				if($q){
					if((mysql_num_rows($q))!=0){
						echo "
					<h1>
					<p align=\"center\">
					<font color=\"blue\" font-size:24 font-weight:bold >
					You are already registered <br> 
					<br><br>
					<a href =\"login.php\" ><u>Login</u></a>
					</font>
					</p>
					</h1>
					";
					}
					else{
						include("way2smsapi.php");
						$o=rand(1000,100000);
						$_SESSION['otp']=$o;
						$msg="use otp  ";
						$msg.=$o;
						$msg.="  for your RealEstateOne Sign up .OTP's are confidential .Do not share your otp with anyone";
						$q=mysql_query("select mobileno from aadhar where aadharno='$a'",$con);
						$mob=mysql_fetch_array($q);
						$m=$mob["mobileno"];
						
						sendWay2SMS("8989229026","123456",$m,$msg);
				  ?>
					<h1 align="center" > Registration Form </h1>
					<form action ="register.php?" method="get">
					<?php
					echo"
					<p>
					<table cellspacing=\"10\"  align=\"center\">
					
					<tr>
					<br>
					<td><label for =\"aadhar\">Aadhar no</label></td>
					<td><input type =\"text\" name=\"aadhar\" value={$a} required ></td>
					
					</tr>
					

					<tr>
					
				
					<td><label for =\"otp\">Enter otp recieved on your registered mobile number :</label></td>
					<td><input type =\"password\" name=\"otp\" required ></td>
					
					</tr>
					</table>
					
					<p align=\"center\">
					<input type =\"submit\" name=\"ok2\" value =\"submit\">
					</p>
					
					
					</p>
					</form>
					";
				}
				}
			}
		}
		else if(isset($_GET['ok2'])){
			
			$o=$_GET["otp"];
			$a=$_GET["aadhar"];
			$g=$_SESSION['otp'];
		    
		
			
			
			
			 if($o==$g){
				 session_destroy();
			 echo "
				<h1 align=\"center\" > Registration Form </h1>
				<form action =\"register.php\" method=\"get\">
				<br>  <br>
				<p>
				<table cellspacing=\"10\"  align=\"center\">
				
				<tr>
				<br>
				<td><label for =\"aadhar\">Aadhar no</label></td>
				<td><input type =\"text\" name=\"aadhar\" value={$a} required ></td>
				
				</tr>
				
				<tr>
				<td><label for =\"id\">User Id (6 characters)</label></td>
				<td><input type =\"text\" name=\"id\"  required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"password\">Password</label></td>
				<td><input type =\"password\" name=\"password\"  required ></td>
				
				</tr>
				
				<tr>
			
				<td><label for =\"fname\">Full Name</label></td>
				<td><input type =\"text\" name=\"fname\"  required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"dob\">Date of birth </label></td>
				<td><input type =\"date\" name=\"dob\"  required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"gender\">Sex </label></td>
				<td><input type =\"text\" name=\"gender\"  required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"job \">Occupation</label></td>
				<td><input type =\"text\" name=\"job\"  required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"nation\">Nationality</label></td>
				<td><input type =\"text\" name=\"nation\" required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"hno\">House no</label></td>
				<td><input type =\"text\" name=\"hno\" required ></td>
				
				</tr>

				<tr>
				
				<td><label for =\"street\">Street</label></td>
				<td><input type =\"text\" name=\"street\" required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"city\">City</label></td>
				<td><input type =\"text\" name=\"city\" required ></td>
				
				</tr>
				<tr>
				
				<td><label for =\"state\">State</label></td>
				<td><input type =\"text\" name=\"state\" required ></td>
				
				</tr>
				
				<tr>
				
				<td><label for =\"pcode\">Pin Code</label></td>
				<td><input type =\"text\" name=\"pcode\" required ></td>
				
				</tr>
				<tr>
				
				<td><label for =\"phone\">Contact no</label></td>
				<td><input type =\"text\" name=\"phone\" required ></td>
				
				</tr>
				<tr>
				
				<td><label for =\"eid\">Email Id</label></td>
				<td><input type =\"text\" name=\"eid\" required ></td>
				</tr>
				
				<tr>
				
				<td><label for =\"ms\">Martial Status</label></td>
				<td><input type =\"text\" name=\"ms\" required ></td>
				</tr>
				
				</table>
				
				<p align=\"center\">
				<input type =\"submit\" name=\"ok3\" value =\"submit\">
				</p>
				
				
				</p>
				</form>
				";
			 
			}
			else{
				echo "
				<h1>
				<p align=\"center\">
				<font color=\"red\" font-size:36 font-weight:bold >
				
				Wrong Otp!!!!!
				<br><br>
				<a href =\"register.php\" ><u>Retry?</u></a>
				</font>
				</p>
				</h1>
				";
			}
			
		}
		
		else if(isset($_GET['ok3'])){
			$a=$_GET['aadhar'];
			$i=$_GET['id'];
			$p=$_GET['password'];
			$fn=$_GET['fname'];
			$d=$_GET['dob'];
			$g=$_GET['gender'];
			$j=$_GET['job'];
			$n=$_GET['nation'];
			$h=$_GET['hno'];
			$s=$_GET['street'];
			$c=$_GET['city'];
			$st=$_GET['state'];
			$p=$_GET['pcode'];
			$e=$_GET['eid'];
			$m=$_GET['ms'];
			$ph=$_GET['phone'];
			
			$q=mysql_query("insert into user values('{$a}','{$i}','{$p}','{$fn}','{$d}','{$g}','{$j}','{$n}','{$h}','{$s}','{$c}','{$st}','{$p}','{$e}','{$m}')",$con);
			$r=mysql_query("insert into phone values ('{$i}','{$ph}')",$con);
			if($q){
				echo"
				<p align=\"center\" >
				<font color=\"blue\" size=24 >You have registered successfully</font>";
				
					$msg="Dear RealEstateOne user you are successfully registered \n User Id :";
					$msg.=$i;
					$msg.="\nPassword:";
					$msg.=$p;
					
					$headers = "From: RealEstateOne.com" . "\r\n" ;
					mail($e, "Registered successfully",$msg,$headers);
				echo"
				<br>
				<form action=\"login.php\">
				<input type=\"submit\" value=\"Login\">
				</form>
				</p>
				
				";
			}
			else{
				echo "
				<p  align=\"center\">
				<font color=\"red\" size=36>
				Oops some error occured!!!
				</font>
				<br>
				<a href =\"register.php\" >Retry</a>
				</p>
				";
				
			}
		}
		else{
			echo "
				<h1 align=\"center\" > Registration Form </h1>
				<br>  <br>
				<form action =\"register.php\" method=\"get\">
				<p>
				<table  align=\"center\">
				
				<tr>
				<p>
				<td><label for =\"aadhar \"> Aadhar no</label></td>
				<td><input type =\"text\" name=\"aadhar\" required ></td>
				</p>
				</tr>
				</table>
				
				<p align=\"center\">
				<td  ><input type =\"submit\" name=\"ok1\" value =\"submit\"></td>
				</p>
				
				
				</p>
				</form>
				";
		}
		?>
</div>
</div>
</body>
</html>