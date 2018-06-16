<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Feedback</title>
<script type="text/javascript" src="script.js"></script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style>

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    
    background-color: green;
    color: white;
}
th, td {
    padding: 5px;
    text-align: left;
}
#header-wrapper {
	color: white;
}
#header-wrapper #header #logo p {
	color: white;
}
	
	#content h2 {
	color: green;
}
    .header {
	color: white;
}
    .header {
	color: white;
}
</style>
</head>

<body>
<div id="header-wrapper">
	<div id="header">
	    <div id="logo">
	    <h1><a href="#">MOBILE REVIEW</a></h1>
		<br>
		
			<p>The ultimate resource for handset information.</p>
		</div>
		<div id="menu">
			<ul>
                 <?php

				if(isset($_SESSION['user']))
				{
					echo ("<li ><a href=\"user_home.php\" >My Profile</a></li>");
				}else
				{
					
				}

				?>
				<li><a href="index.php" accesskey="2" title="">Home</a></li>
				
				

                <?php
                
                 if(isset($_SESSION['user']))
                 {
                     echo ("<li><a href=\"logout.php\" >Logout</a></li>");
                 }else
                 {
                     echo ("<li><a href=\"login.php\" >Login</a></li>");
                 }


                ?>

			

				
				<li><a href="about.php" >About</a></li>
				<li class="current_page_item"><a href="feedback.php" accesskey="1" title="">Feedback</a></li>
				
			</ul>
		</div>
	</div>
<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			<div id="content">
		<h2>We Are Waiting For Your Review !</h2>
		
				
			

			<div class="container">
<form action="feedbackO.php" method="post">
	<div class="row">
	
		<div class="col-lg-2">Email</div>
		<div class="col-lg-3"><input type="email" name="email" class="form-control" placeholder="Enter Email here" required></div>


	</div>
	<br>
	<div class="row">
		<div class="col-lg-2">Message</div>
		<div class="col-lg-3"><textarea type="text" name="message" class="form-control" placeholder="Enter your message here" required></textarea></div>


	</div>
	<br>
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-3"><input type="submit" class="btn btn-danger" value="Send Now"></div>


	</div>
</form>
			</div>

	



 
<div id="calendar">
     <p id="calendar-day"></p>
     <p id="calendar-date"></p>
     <p id="calendar-month-year"></p>
    </div>
    
  </div>
</body>
</html>
