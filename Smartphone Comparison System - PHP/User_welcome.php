<?php
session_start();
require_once './DB_CONFIG/connect_db.php';
$user = $_SESSION['user'];
$sql1= "SELECT * FROM alluser WHERE username = 'username'";
$result1=$db->query($sql1);

?>

<!DOCTYPE html>
<!-- 

 -->

<head>
 <title>UserProfile</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="css/style.css">

<!--styles -->
<link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
  
	#header-wrapper #header #logo h3 a {
	color: white;
}
    #header-wrapper #header #logo p {
	color: white;
}
    </style>
</head>

<body> 

<div id="header-wrapper">
	<div id="header">
	
	    <div id="logo">
          <h3><a href="index.php">MOBILE REVIEW</a></h3>
			<p>The ultimate resource for handset information.</p>
		</div>
		<div id="menu">
			<ul>
               
                <?php

				if(isset($_SESSION['user']))
				{
					echo ("<li class='current_page_item'><a href=\"User_welcome.php\" >My Profile</a></li>");
					
				}else
				{
					echo ("<li ><a href=\"index.php\" accesskey='1' >Home</a></li>");
				}

				?>
                <li><a href="User_home.php" accesskey="2" title="">Home</a></li>
				<li><a href="types.php" accesskey="2" title="">Phones</a></li> 
				

				<?php

				if(isset($_SESSION['user']))
				{
					echo ("<li><a href=\"logout.php\" >Logout</a></li>");
				}else
				{
					echo ("<li><a href=\"login.php\" >Login</a></li>");
				}


				?>
				<li ><a href="user_about.php" >ABOUT</a></li>
				<li ><a href="user_feedback.php" >Feedback</a></li>
                
				
			</ul>
		</div>
	</div>


	
</div>
<br/><br/>
<div class="container">

 <form name="form" id="form1" class="form-horizontal"  method="POST">
				
		<div class="row"><h2 style="color: green">Welcome!<span style="color: red"> <?php echo $_SESSION['user']; ?></span>, You have successfully Logged in!</h2></div>
       <?php $sqlx = " SELECT * FROM allusers WHERE name ='$_SESSION[user]'";?> 
       
	   
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

 
<br>
<br>
    <div class="row"> 
	<div class="container">
	<br>
   </div>
	</div>
        <br>
 <h5 style="font-weight:bold"> User</h5>
<table id="mytable2" class="table table-bordred table-striped table-hover">
                   
                   <thead>
                   
                    <th>ID</th>
                    <th>Username</th>
                     <th>Password</th>
                     <th>Email</th>
                     <th>Delete</th>
					 
                   </thead>
<tbody>

<?php
  if(mysqli_num_rows($result2)>0) {
      while ($row = mysqli_fetch_array($result2)) {

              echo("<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        
        
        <!--<td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><a href=\"Edit.php?id=$row[0]\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\"><span class=\"glyphicon glyphicon-pencil\"></span></button></a> </p></td>-->
        <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\"><a href=\"Delete.php?id=$row[0]\"><button class=\"btn btn-danger btn-xs\" data-title=\"Delete\"><span class=\"glyphicon glyphicon-trash\"></span></button></a></p></td>

    </tr>");

      }
  }
?>


    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            


            
        </div>
	
</div>





      </div>

  <footer class="white navbar-fixed-bottom">

  </footer>



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

             </script>


  </body>
</html>