

<! doctype html author siddhi>

<html>
<head>
  <title>Delete</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href ="css/all.css" type="text/css" >
  </head>
<body >

<div id="form" align="center" >
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";}
		else{
			$db=mysql_select_db("dbms",$con);
		}
		if(isset($_POST['ok_s'])){
			
			$p=$_POST['pid'];
			$u=$_SESSION['username'];
			
			$q=mysql_query("select userid from property where pid='$p'  " ,$con );
			if(mysql_num_rows($q)!=0){
		  
			  $r=mysql_query("delete from property where pid='$p' and userid='$u' " ,$con );
			  if($r){
				  echo "<style>background-color:#7386d5;</style>
				  Property deleted successfully
				  <br>
				   <a href=\"welcome.php\">Go Back</a>

				  ";
			  }
			  else{
				  echo "<style>background-color:#7386d5;</style>
			  The property could not be deleted...<br>Try again later
			  
			  <br>
               <a href=\"welcome.php\">Go Back</a>

			  ";
				  
			  }
			}
		  else{
			   echo "<style>background-color:#7386d5;</style>
			  The property could not be deleted...<br>Try again later
			  <br>Note: please check whether the property id is correct or not ....You can only delete properties uploaded by you
			  <br>
               <a href=\"welcome.php\">Go Back</a>

			  ";
		}
	  }
		
	  
		else{
		echo"
		        <h1 align=\"center\" >Just a step away </h1>
				<form action =\"delete.php\" method=\"POST\" enctype=\"multipart/form-data\">
				<br>  <br>
				<p>
				<table cellspacing=\"10\"  align=\"center\">
		";
		
		$q=mysql_query(" select max(pid) as count_t from property " ,$con);
		$s=mysql_fetch_array($q);
		$v=$s['count_t'];
		$r=$v+1;
		echo"
		
				<tr>
				
				<td><label for =\"pid\">Property id</label></td>
				<td><input type =\"text\" name=\"pid\"  ></td>
				</tr>
				
				
				
				</table>
				
				<p align=\"center\">
				<input type =\"submit\" name=\"ok_s\" value =\"delete\">
				</p>
				
				
				
				</form>
				
		
		";
		}
	?>
</div>
</body>
</html>