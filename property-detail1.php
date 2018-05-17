<!--PROPERTY_DETAILS-->
<!--Nikita Soni-->
<!Doctype HTML>
<head>
<!--PROPERTY DETAILS-->
<title>Property Details</title>
<!---->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--INTERNAL CSS-->
<style>
	 body
{
	background-image:url("images/bg1.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	
}
	</style>
	<!--HEAD TAG ENDS-->
	</head>
	<!--BODY TAG-->
<body>
<!-- banner -->
<div class="container-fluid">
	<div class="banner">
		<img src="images/banner.jpg" >
	</div>

</div>
<!-- banner -->
<!--property details display-->
<div class="container">
<div class="properties-listing spacer">

<div class="row">


<div class="col-lg-12 col-sm-8 ">
<!--DATABSE CONNECTIVITY-->
<?php
$con=mysql_connect("localhost","root","");
		if(!$con)
			{echo "connection error";}
		else{
			$db=mysql_select_db("dbms",$con);
		}
		//RETRIEVING PROPERTY ID
if(isset($_GET['posts'])) {
	$p= $_GET['posts'];
	$sql = mysql_query("SELECT * FROM property WHERE pid ='$p' " ,$con);
	$arr=mysql_fetch_array($sql);
	echo "<h2> Property $arr[pid] </h2>";


/*code for slide show of propety images(to be written)*/

  echo "<div class=\"col-sm-4\">";
  $r=mysql_query("select img from property where pid='$p' ",$con);
 $s=mysql_fetch_array($r);
echo "<img src = \"$s[img]\" height=\"400\" width=\"450\">";
  echo " </div>
<div class=\"col-sm-4\"></div>  
<div class=\"col-lg-4 col-sm-4\"><div class=\"col-lg-12  col-sm-6\">";
echo "<div class=\"property-info\">";
echo "<div class=\"spacer\"><h3><span class=\"glyphicon glyphicon-th-list\"></span> Properties Detail</h3>";
echo "<p class=\"area\"> <span class=\"glyphicon glyphicon-map-marker\"></span> Address: Hno. $arr[pno] $arr[street] $arr[city] $arr[state] $arr[country]</p>";
echo "<p class=\"price\"><span class=\"glyphicon glyphicon-th-list\"></span> Rs. $arr[price]</p>";

echo "<p class=\"area\"><span class=\"glyphicon glyphicon-th-list\"></span> Details: $arr[pdetails]</p>";
echo "<p class=\"area\"><span class=\"glyphicon glyphicon-th-list\"></span> Property Type : $arr[ptype]</p>";
echo "<p class=\"area\"><span class=\"glyphicon glyphicon-th-list\"></span> Registration Number:$arr[regno]</p>";




	$sql = mysql_query("SELECT * FROM property,user,criminal,phone  WHERE pid ='$p' AND property.userid =user.userid AND user.aadharno=criminal.aadharno " ,$con);
	$arr=mysql_fetch_array($sql);
	

	echo "
<div class=\"col-lg-12  col-sm-6\">";
echo "<div class=\"property-info\">";
echo "<div class=\"spacer\"><h3><span class=\"glyphicon glyphicon-th-list\"></span> Owner Detail</h3>";
echo "<p class=\"price\"><span class=\"glyphicon glyphicon-th-list\"></span> Name: $arr[name]</p>";
echo "<p class=\"price\"><span class=\"glyphicon glyphicon-th-list\"></span> DOB: $arr[dob]</p>";
echo "<p class=\"price\"><span class=\"glyphicon glyphicon-th-list\"></span> Gender: $arr[gender]</p>";

echo "<p class=\"area\"> <span class=\"glyphicon glyphicon-map-marker\"></span> Address: Hno. $arr[hno] $arr[street] $arr[city] $arr[state] $arr[country]</p>";
echo "<p class=\"price\"><span class=\"glyphicon glyphicon-th-list\"></span> Occupation: $arr[job]</p>";
echo "<p class=\"area\"><span class=\"glyphicon glyphicon-th-list\"></span> Martial Status:$arr[martialstatus]</p>";
echo "<p class=\"area\"><span class=\"glyphicon glyphicon-th-list\"></span> Email Id: $arr[eid]</p>";
echo "<p class=\"area\"><span class=\"glyphicon glyphicon-th-list\"></span> Contact no.: $arr[phoneno]</p>";
echo "<p class=\"area\"><span class=\"glyphicon glyphicon-th-list\"></span> Any Crime: $arr[crimetype]</p>";




}
?>




        

  </div>
</div>
</div>

</div>
</div>
</div>
</div>
</body>
</html>