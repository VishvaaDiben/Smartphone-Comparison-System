<?php 
session_start();
include './DB_CONFIG/connect_db.php';
$Name="";
$Price="";
//$IMG="";

if(isset($_POST['name'])){
	if(isset($_SESSION['user'])){
 $itemName = $_POST['name'];
 $itemPrice = $_POST['price'];
 $itemQty = $_POST['qty'];
 $orderBy = $_SESSION['user'];
  


$sql= "INSERT INTO orders (item_name,item_price,item_qty,order_by,date) VALUES ('$itemName','$itemPrice','$itemQty','$orderBy', NOW())";


$db->query($sql);

 if($db->affected_rows>0) {
      
	 
	/*echo ("<script>alert(\"Order Received. Thanks.\"); </script>");
	 
	 header('location:welcome.php');*/
	 
	  echo("<script>alert('Order Received. Thanks');
                     window.location.href='welcome.php';
                </script>");
}
else
{
	 echo "Error";
}
	}
	else{
		echo ("<script>if(confirm(\"Please Login to make Orders!.\")){  window.location.href = \"http://localhost/web3/login.php\"; } </script>");

	}
}
if(isset($_GET['name'])){
 $Name = $_GET['name'];
 $Price = $_GET['price'];
// $IMG = $_GET['image'];
 

}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit User - </title>
	<!--  favicon -->
   <link rel="shortcut icon" href="favicon.ico">

    <!--styles -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    
        
  </head>

  <body>
<!--
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html"></a>
        </div>
      </div>
    </div> -->

   <div class="container">
<br>
<br>
    <div class="row"> 
	<div class="container">
	<br>
        



    </div>
	</div>
      
            <form method="POST" action="typesD.php" class="row">
			<br>
	
		  
                <legend>Ordering - <span class="blue"><?php echo $Name; ?></span></legend>
            	<!-- One Row -->
				<div class="row">
				<div class="col-lg-6">
					<div class="row">
										<div class="col-sm-2">
					 <label>Name</label>
					</div>					
					<div class="col-sm-6">
					<input name="name" type="text" value="<?php echo $Name; ?>" class="form-control"readonly >
					</div>
					
					</div>
                 <br>
			
 	<!-- One Row -->
					<div class="row">
										<div class="col-sm-2">
					 <label>Price</label>
					</div>					
					<div class="col-sm-6">
					<input name="price" type="text" value="<?php echo $Price; ?>" class="form-control" readonly >
					</div>
					
				</div>
                 <br>
              
					
			 	<!-- One Row -->
					<div class="row">
										<div class="col-sm-2">
					 <label>Quantity</label>
					</div>					
					<div class="col-sm-6">
                    <select id="scripts" name="qty" style="width:270px;" required>
                <option value="">--Select--</option>    
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
					<!--<input name="qty" type="number" class="form-control" required/>-->
					</div>
					
					</div>
                 
					<br>
						 
				
						<div class="row">
							<div class="col-sm-2">
					
					</div>
					<div class="col-sm-6">
					
					
                    <button type="submit" class="btn btn-success">Confirm Order</button>
					</div>
					</div>
					</div>
					<div class="col-lg-6">
					<?php

$sql ="SELECT image FROM items WHERE name ='$Name' AND price = '$Price'";
$query = mysqli_query($db,$sql) or die ;
							

						//$result = mysql_query($sql); 

						if (mysqli_num_rows($query) > 0) 
						{                                         
    
   						while($row = mysqli_fetch_array($query)) 
						{
							?>
					<img src="images/<?php echo $row['image']; ?>" height="240" width="240" />
                    <?php
                    }
					}
						?>
					</div>
					</div>
            </form>
      



<div class="container">

        <!-- Footer -->
        <footer>
            <div class="row">
			 <hr>
                <div class="col-lg-12">
                    <p>Copyright &copy; Reddy`s Football Equipment2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>

    <!-- javascript ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>


  </body>
</html>
