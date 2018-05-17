<?php
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>
<!--CONNECTING TO DATABASE-->
<?php    
$mysqli=new mysqli('localhost','root','','dbms');
	if($mysqli->connect_error){

		printf("can not connect database %s\n",$mysqli->connect_error);
		exit();
	}

	$query="SELECT * FROM property where userid= '{$_SESSION['username']}'";
	$read=$mysqli->query($query);
?>

<!--NIKITA Soni-->
<!DOCTYPE html>
<html lang="en">
<!--HEAD TAG STARTS-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WelCome</title>
	<!--OUR CUSTOM CSS-->
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/sidebar.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
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
<body>
<!--BODY TAG STARTS-->
<!--SIDEBAR CONTAINER-->
       <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>RealEstateOne</h3>
                </div>

                <ul class="list-unstyled components">
                    <p></p>
                    <!--<li>
                        <a href="#">Profile</a>
                      
					<li>-->
                        <a href="buy1.php">BUY</a>
                    </li>
                    <li>
                        <a href="sell1.php">SELL</a>
                    </li>
					<li>
                        <a href="rent1.php">RENT</a>
                    </li>
					<li>
                        <a href="tenant1.php">SEARCH TENANT</a>
                    </li>
					<li>
                        <a href="delete.php">DELETE PROPERTY</a>
                    </li>
                    
                </ul>

            </nav>
			<!--SIDEBAR CONTAINER ENDS-->
			<!-- Page Content Holder -->
            <div id="content">

<!--BANNER STARTS-->
<div class="container-fluid">
	<div class="banner">
		<img src="images/banner.jpg" >
	</div>

</div>
<!--BANNER ENDS-->
<!--NAV BAR STARTS-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <!--LOGO-->
      <a class="navbar-brand" href="index.php">RealEstateEOne</a>
    </div>

  
<!--USERNAME AND LOGOUT OPTIONS-->
	  <ul class="nav navbar-nav navbar-right">
<?php echo "<li><a href=\"profile.php\"><span class=\"glyphicon glyphicon-user\"></span> $username</a></li>";?>

<?php echo "<li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span>  LogOut</a></li>";?>
    </ul>
	<!--END OF NAV BAR-->
	<br/><br/>
	<hr><hr><hr>
	<br/><br/>
	<!--PROPERTY LIST STARTS-->
	    <h2>  Properties Uploaded by you  </h2>

<!--TABLE FOR PROPERTY LIST -->
<table class="table table-striped table-hover ">
  <thead>
    <tr>

      <th>Property Id</th>
      <th>Price</th>
      <th>Address</th>
      
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=$read->fetch_assoc()) { ?>

    <tr class="info">
      <td><?php echo  $row['pid'];   ?></td>
      <td><?php echo  $row['price'];   ?></td>
      <td><?php echo  'H-No. '.$row['pno'].' '.$row['street'].' '.$row['street'].' '.$row['city'].' '.$row['state'];?></td>
      <!--<td><img src="uploads/<?php echo  $row['images']; ?></td>-->
      <td><a href="property-detail1.php?posts=<?php echo $row['pid'];  ?>">Details</a></td>
    </tr>

    <?php } ?>
  </tbody>
</table> 
	

</div>  
    </div>
  
</nav>


        </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <div class="container">
 

		
		<!--table ends-->
 

	<!--end of body -->	
</body>
</html>