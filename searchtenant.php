<! doctype html author siddhi>

<html>
<head>
  <title>Rent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href ="css/reg.css" type="text/css" >
  </head>
<body >

<div id="form" >
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";}
		else{
			$db=mysql_select_db("dbms",$con);
		}
		
		echo"
		        <h1 align=\"center\" >Just a step away </h1>
				<form action =\"#.php\" method=\"post\">
				<br>  <br>
				<p>
				<table cellspacing=\"10\"  align=\"center\">
		";
		
		$q=mysql_query(" select max(pid) from property " ,$con);
		$r=$q+1;
		echo"
		
	         	<tr>
				
				<td><label for =\"operation\">For</label></td>
				<td>
				<select name=\"operation\" disabled=\"disabled\">
				<option value=\"rent\">Rent</option>
				<option value=\"sell\">Sell</option>
				
				</select>
              </td>
				</tr>
				<tr>
				
				<td><label for =\"pid\">Property id</label></td>
				<td><input type =\"number\" name=\"pid\" value={$r} readonly ></td>
				</tr>
				
				<tr>
				
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
				
				<td><label for =\"regno\">Registration number</label></td>
				<td><input type =\"text\" name=\"regno\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"pno\">Property address:  <br> house number</label></td>
				<td><input type =\"text\" name=\"pno\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"street\">Street</label></td>
				<td><input type =\"text\" name=\"street\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"city\">City</label></td>
				<td><input type =\"text\" name=\"pno\" required></td>
				</tr>

				<tr>
				<td><label for =\"country\">Country</label></td>
				<td><input type =\"text\" name=\"country\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"price\">Price</label></td>
				<td><input type =\"number\" name=\"price\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"pdetails\">Details <br> Enter all the details you think can attract the buyer  </label></td>
				<td><textarea name=\"pdetails\"  rows=\"6\" cols=\"22\" required></textarea></td>
				</tr>
				
				<tr>
				<td><label for =\"img1\">Upload Image</label></td>
				<td><input type =\"file\" name=\"img1\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"img2\">Upload Image</label></td>
				<td><input type =\"file\" name=\"img2\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"img3\">Upload Image</label></td>
				<td><input type =\"file\" name=\"img3\" required></td>
				</tr>
				</table>
				
				<p align=\"center\">
				<input type =\"submit\" name=\"ok\" value =\"submit\">
				</p>
				
				
				
				</form>
				
		
		";
	?>
</div>
</body>
</html>