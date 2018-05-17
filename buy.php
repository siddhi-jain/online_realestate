<! doctype html author siddhi>

<html>
<head>
  <title>Buy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href ="css/all.css" type="text/css" >
  </head>
<body >

<div id="form" align="center" style="margin:20 320 15 320;" >
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";}
		else{
			$db=mysql_select_db("dbms",$con);
		}
		if(isset($_POST['ok']))
		{
			include 'buylist.php';
			
		}
	    else{
			echo"
		        <h1 align=\"center\" >Just a step away </h1>
				<form action =\"buy1.php\" method=\"post\">
				<br>  <br>
				<p>
				<table cellspacing=\"10\"  align=\"center\">
		";
		
		$q=mysql_query(" select count(*) from property " ,$con);
		$r=$q+100000;
		echo"
		
	         	
				
				
				<td><label for =\"ptype\">Property type</label></td>
				<td>
				<select name=\"ptype\">
				<option value=\"commercial\">Commercial</option>
				<option value=\"1bhk\">1 bhk flat</option>
				<option value=\"2bhk\">2 bhk flat</option>
				<option value=\"3bhk\">3 bhk flat</option>
				<option value=\"bunglow\">Bunglow</option>
				<option value=\"duplex\">Duplex</option>
				<option value=\"rowhouse\">Row House</option>
				<option value=\"other\">Other</option>
				</select>
              </td>
				</tr>
				
				
				
				<tr>
				<td><label for =\"city\">In which city ?</label></td>
				<td><input type =\"text\" name=\"city\" required></td>
				</tr>

				<tr>
				<td><label for =\"country\">Country</label></td>
				<td><input type =\"text\" name=\"country\" required></td>
				</tr>
				
				
				</table>
				
				<p align=\"center\">
				<input type =\"submit\" name=\"ok\" value =\"submit\">
				</p>
				
				
				
				</form>
				
		
		";
		}
	?>
</div>
</body>
</html>