<?php 
session_start();
if(isset($_GET['uname'])){
$_SESSION['id']=$_GET['uname'];
$_SESSION['password']=$_GET['password'];
}

?>

<! doctype html author siddhi>

<html lang="en">
<head>
  <title>Admin</title>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href ="css/admin.css" type="text/css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  
  body
{
	background-image:url("images/back1.jpg");
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
 <?php echo  "<li class=\"active\"><a href=\"#.php\">Contact Requests</a></li>";?>
    
       
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
<?php echo "<li><a href=\" #.php\"><span class=\"glyphicon glyphicon-user\"></span>".$_SESSION['id']. "</a></li>";?>
<!--<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
<?php echo "<li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Log Out</a></li>";?>
    </ul>
  </div>
</nav>


<div id="heads" >
<div id="form" >
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";
		}
		else{
			$db=mysql_select_db("dbms",$con);
		}
		if(isset($_GET['submit'])){
			echo"
			<form action=\"admin.php\" method=\"get\" >
			<label for=\"no\">Enter message number</label>
			<input type=\"number\" name=\"no\"  >
			<br>
			<p align=\"center\">
					<input type =\"submit\" name=\"ok1\" value=\"Delete\">
					</p>
			</form>
			";
		}
		
		
		elseif(isset($_GET['ok1'])){
			$n=$_GET['no'];
			$q=mysql_query("delete from contact where number='$n' ",$con);
			if($q){
				
				echo " Deleted <br>";
				echo " <a href =\" admin.php\">Go Back</a>
				";
			}
		}
		
		else{
			$i=$_SESSION['id'];
			$p=$_SESSION['password'];
			$q=mysql_query("select * from admin where id='$i' and password='$p' ",$con);
			if($q){
				if(mysql_num_rows($q)==1){
					
					echo"
					<table align=\"center\">
					<thead>
					<tr>
					<th>Message Number</th>
					<th>Name</th>
					<th>Email Id</th>
					<th>Message</th>
					</tr>
					</thead>
					<tbody>";
					$r=mysql_query("select * from contact ",$con);
					
					while($b=mysql_fetch_array($r)){
						echo "
						<tr>
						<td>" .$b['number'] ."</td>
						<td>" .$b['name']. "</td>
						<td> " .$b['eid']. "</td>
						<td> ". $b['msg'] ."</td>
						</tr>
						";
						
					}
					echo "
					</tbody>
					</table>
					";
					echo"
					<br> <br>
					<form action=\"admin.php\" method=\"get\">
					<p align=\"center\">
					<input type =\"submit\" name=\"submit\" value=\"Delete requests which are processed\">
					</p>
					</form>
					" ;
				}
				else{
					
					echo "<p><font color=\"red\" size=15>Incorrect user id or password</font></p>";
					echo " <a href=\"adminlogin.php\"><font color=\"red\" size=3>Retry?</font></a>"; 
				    
				}
				
			}
			
		}
		
			
        
		
		
		?>
</div>
</div>
</body>
</html>