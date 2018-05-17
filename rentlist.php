
<!--CONNECTING TO DATABASE-->
<?php    
$mysqli=new mysqli('localhost','root','','dbms');
	if($mysqli->connect_error){

		printf("can not connect database %s\n",$mysqli->connect_error);
		exit();
	}
	$ptype=$_POST['ptype'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$citylike='%'.$city.'%';
	$countrylike='%'.$country.'%';

	$query="SELECT * FROM property where ptype= '$ptype' and city LIKE '$citylike' and country like '$countrylike' and operation='rent' order by price desc  ";
	$read=$mysqli->query($query);
?>


<!DOCTYPE html>
<html lang="en">

	
	<!--PROPERTY LIST STARTS-->
	    <h2>  Property List  </h2>

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
      <td><?php echo  'H-No. '.$row['pno'].' '.$row['street'].' '.$row['street'].' '.$row['city'].' '.$row['state'].' '.$row['country'];?></td>
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