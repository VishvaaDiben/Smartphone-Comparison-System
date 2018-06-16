<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>User Home</title>
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
					echo ("<li ><a href=\"User_welcome.php\" >My Profile</a></li>");
				}else
				{
					
				}

				?>
				<li class="current_page_item"><a href="User_home.php" accesskey="1" title="">Home</a></li>
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

			

				
				<li><a href="user_about.php" >About</a></li>
				<li><a href="user_feedback.php" >Feedback</a></li>
				
			</ul>
		</div>
	</div>


	<div id="banner">
		<div class="img-border"><img src="images/JJ-cell-phone-home-banner.jpg" width="1120" height="470" alt=""/></a> </div>
	</div>



 
<div id="calendar">
     <p id="calendar-day"></p>
     <p id="calendar-date"></p>
     <p id="calendar-month-year"></p>
    </div>
    
</div>
</body>
</html>
