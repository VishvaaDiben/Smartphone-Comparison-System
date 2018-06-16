<?php
session_start();
include '../DB_CONFIG/connect_db.php';
if($_SESSION['user'] != "admin") {
    $home_url = '../login.php';
    header('Location: '.$home_url);
}
if(isset($_POST['submit'])){
 $imgFile = $_FILES['pic']['name']; 
 $tmp_dir = $_FILES['pic']['tmp_name'];
 $imgSize = $_FILES['pic']['size'];	
 $Name = $_POST['Name'];
 $Price = $_POST['Price'];
 $Technology = $_POST['Technology'];
 $Announce = $_POST['Announce'];
 $Weight = $_POST['Weight'];
 $Build = $_POST['Build'];
 $Sim = $_POST['Sim'];   
 $Os = $_POST['Os']; 
 $Chipset = $_POST['Chipset'];
 $Cpu = $_POST['Cpu'];
 $Camera = $_POST['Camera'];
 $Battery = $_POST['Battery'];
 $Performance = $_POST['Performance'];
 
           $upload_dir = 'images/'; // upload directory
	
	        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
          /*image php variable*/            $Pic = rand(1000,1000000).".".$imgExt; //
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions))
			{			
				                      // Check file size '5MB'
				                     if($imgSize < 5000000)				
				                      {
					                   move_uploaded_file($tmp_dir,$upload_dir.$Pic);
				                       }
				                     else
				                      {
					                 //$errMSG = "Sorry, your file is too large.";
					                  echo("<script>alert('Sorry, your file is too large.');
                                           window.location.href='.php';
                                         </script>");
				                       }
			}
			
			else
			{
				//$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	
				 echo("<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                     
                </script>");	
			}

include 'DB_CONFIG/connect_db.php';
 
$sql= "INSERT INTO phones (image,name,price,technology,announce,weight,build,sim,os,chipset,cpu,camera,battery,performance) VALUES ('$Pic','$Name',' $Price','$Technology','$Announce','$Weight','$Build','$Sim','$Os','$Chipset','$Cpu','$Camera','$Battery','$Performance')";


$db->query($sql);

 if($db->affected_rows>0) {
	  echo("<script>alert('Record Added');
                     window.location.href='insert.php';
                </script>");
}
else
{
	 echo "Error";
}
	} 


?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Home </title>
  

    <!--  styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--  favicon -->
    <link rel="shortcut icon" href="favicon.ico">

  </head>

  <body>

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
    </div>

     <div class="container">
 




    <br>
      <br>
    <div class="row"> 
	<div class="container">
	<br>
        <a href="index.php" ><button id="showAll" class="btn btn-success btn-md">Manage Users</button></a>	   
        <a href="feedback.php"><button class="btn btn-info btn-md">View Feedback</button></a>
        <a href="insert.php"><button class="btn btn-primary">Add Phone</button></a>
        <a href="update1.php"><button class="btn btn-default">Update Phone</button></a>
        <a href="../logout.php"><button class="btn btn-danger btn-md">Logout</button></a>




    </div>
	</div>
    
   <div class="container" >
<br>
<br>
    <div class="row"> 
	<div class="container">
	<br>

    </div>
	</div>
      
            <form method="POST" action="insert.php" class="row" enctype="multipart/form-data">
			<br>
	
		  
                <legend>Adding Phones <span class="blue"></span></legend>
            	<!-- One Row -->
				
				    <div class="row">
					<div class="col-sm-2">
					<label>Photo</label>
					</div>					
					<div class="col-sm-6">
                    <input id="" type="file" name="pic" accept="image/*" required>
					</div>
					</div>
                    <br>
				
				    <div style="position:relative; left:9px;" class="row">
                
				
					<div class="row">
					<div class="col-sm-2">
					<label>Name</label>
					</div>					
					<div class="col-sm-3">
					<input name="Name" type="text"  class="form-control" required>
					</div>
					
					
                    
 	            <!-- One Row -->
	            
                
				
					<div class="row">
					<div class="col-sm-2">
					<label>Price</label>
					</div>					
					<div class="col-sm-3">
					<input name="Price" type="text"  class="form-control" required>
					</div>
					
					
					</div>
					<br>
			        <div style="position:relative; left:9px;" class="row">
					
                    <div class="row">
					<div class="col-sm-2">
					<label>Technology</label>
					</div>					
					<div class="col-sm-3">
					<input name="Technology" type="text"  class="form-control" required>
					</div>
					
                    
					<div class="row">
					<div class="col-sm-2">
					<label>Announce</label>
					</div>					
					<div class="col-sm-3">
					<input name="Announce" type="text"  class="form-control" required>
					</div>
					
					</div>
                    <br>
                    <div style="position:relative; left:9px;" class="row">
                    <div class="row">
					<div class="col-sm-2">
					<label>Weight</label>
					</div>					
					<div class="col-sm-3">
					<input name="Weight" type="text"  class="form-control" required>
					</div>
					
					
					
					<div class="row">
					<div class="col-sm-2">
					<label>Build</label>
					</div>					
					<div class="col-sm-3">
					<input name="Build" type="text"  class="form-control" required>
					</div>
					
					</div>
                    <br>
					<div style="position:relative; left:9px;" class="row">
                    <div class="row">
					<div class="col-sm-2">
					<label>Sim</label>
					</div>					
					<div class="col-sm-3">
					<input name="Sim" type="text"  class="form-control" required>
					</div>
					
					
					
                    <div class="row">
					<div class="col-sm-2">
					<label>Os</label>
					</div>					
					<div class="col-sm-3">
					<input name="Os" type="text"  class="form-control" required>
					</div>
					
					</div>
                    <br>
					<div style="position:relative; left:9px;" class="row">
					<div class="row">
					<div class="col-sm-2">
					<label>Chipset</label>
					</div>					
					<div class="col-sm-3">
					<input name="Chipset" type="text"  class="form-control" required>
					</div>
					
					
					
					<div class="row">
					<div class="col-sm-2">
					<label>Cpu</label>
					</div>					
					<div class="col-sm-3">
					<input name="Cpu" type="text"  class="form-control" required>
					</div>
					
					</div>
				    <br>
					<div style="position:relative; left:9px;" class="row">
                    <div class="row">
					<div class="col-sm-2">
					<label>Camera</label>
					</div>					
					<div class="col-sm-3">
					<input name="Camera" type="text"  class="form-control" required>
					</div>
					
					
					
                	<div class="row">
					<div class="col-sm-2">
					<label>Battery</label>
					</div>					
					<div class="col-sm-3">
					<input name="Battery" type="text"  class="form-control" required>
					</div>
					
					</div>
					
                    <br>
					<div style="position:relative; left:9px;" class="row">
                	<div class="row">
					<div class="col-sm-2">
					<label>Performance</label>
					</div>					
					<div class="col-sm-3">
					<input name="Performance" type="text"  class="form-control" required>
					</div>
					
					</div>
					
                    <br>
		
                   <button type="Submit" name="submit" class="btn btn-success">Add Item</button>
				   <button type="Reset" name="reset" class="btn btn-success">Reset</button> 
            </form>
      




  

  <!-- Le javascript
  ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

             <script>

                 $(document).ready(function () {
                     $('.dropdown-toggle').dropdown();
                     $("[data-toggle=tooltip]").tooltip();
                 });
				 
				$('a[href="#my_modal"]').on('click',function(){
   var id1 = $(this).attr('data1-id');
    console.log(id1);
  $('input[name="id1"]').val(id1);
  
  var id2 = $(this).attr('data2-id');
    console.log(id2);
  $('input[name="id2"]').val(id2);
   
    var id3 = $(this).attr('data3-id');
    console.log(id3);
  $('input[name="id3"]').val(id3);
  
});


             </script>


  </body>
</html>
