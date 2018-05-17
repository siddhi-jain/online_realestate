<?php
if(!isset($_SESSION['username']))
{
	session_start();
}
?>

<! doctype html author siddhi>

<html>
<head>
  <title>Search tenant</title>
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
			$o="rent";
			$p=$_POST['pid'];
			$u=$_SESSION['username'];
			$pt=$_POST['ptype'];
			
			
			
			$r=$_POST['regno'];
			$pno=$_POST['pno'];
			$s=$_POST['street'];
			$c=$_POST['city'];
			$st=$_POST['state'];
			$co=$_POST['country'];
			$price=$_POST['price'];
			$pd=$_POST['pdetails'];
			
			$fn=$_FILES['img']['name'];
			$extensions= array("jpeg","jpg","png");
			
			$file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));
			
		
		if(in_array($file_ext,$extensions)=== false){
         echo "extension not allowed, please choose a JPEG or PNG file.";
      }
	  else{
		  
		  $new="uploads/".rand(1,1000)."_".time()."_".$_FILES['img']['name'];
		  move_uploaded_file($_FILES['img']['tmp_name'],$new);
		  
		  $q=mysql_query("insert into property values('{$o}','{$p}','{$u}','{$pt}','{$r}','{$pno}','{$s}','{$c}','{$st}','{$co}','{$price}','{$pd}','{$new}') " ,$con );
		  if($q){
			 echo "<style>background-color:#7386d5;</style>
			  Thank you for choosing RealEstateOne
			  <br>
               <a href=\"welcome.php\">Go Back</a>

			  ";
		  }
		  else{
			  echo "There is an error " ;
	
		}
	  }
		}
	  
		else{
		echo"
		        <h1 align=\"center\" >Just a step away </h1>
				<form action =\"tenant.php\" method=\"POST\" enctype=\"multipart/form-data\">
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
				<td><input type =\"text\" name=\"pid\" value={$r} readonly ></td>
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
				<td><input type =\"text\" name=\"city\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"state\">State</label></td>
				<td><input type =\"text\" name=\"state\" required></td>
				</tr>

				<tr>
				<td><label for =\"country\">Country</label></td>
				<td><input type =\"text\" name=\"country\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"price\">Price</label></td>
				<td><input type =\"text\" name=\"price\" required></td>
				</tr>
				
				<tr>
				<td><label for =\"pdetails\">Details <br> Enter all the details you think can attract the buyer  </label></td>
				<td><textarea name=\"pdetails\"  rows=\"6\" cols=\"22\" required></textarea></td>
				</tr>
				
				<tr>
				<td><label for =\"img\">Upload Image</label></td>
				<td><input type =\"file\" name=\"img\" required></td>
				</tr>
				
				
				</table>
				
				<p align=\"center\">
				<input type =\"submit\" name=\"ok_s\" value =\"submit\">
				</p>
				
				
				
				</form>
				
		
		";
		}
	?>
</div>
</body>
</html>