<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>About</title>
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
                 
				
				<li><a href="index.php" accesskey="1" title="">Home</a></li>
				

                <?php
                
                 if(isset($_SESSION['user']))
                 {
                     echo ("<li><a href=\"logout.php\" >Logout</a></li>");
                 }else
                 {
                     echo ("<li><a href=\"login.php\" >Login</a></li>");
                 }


                ?>

			

				
				<li class="current_page_item"><a href="about.php" accesskey="4" title="">About</a></li>
				<li><a href="feedback.php" >Feedback</a></li>
				
			</ul>
		</div>
	</div>
	
	 <center> <div id="content"></center>
	
		<center>
		<h2>About us </h2>
<center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
	<h1>
	<p>
	<center>
		MOBILE REVIEW  objective is to provide the latest information from the development stage, sneak preview and to the the official launch date. Driven with the passion and the will to provide the best and the latest information always, we are confident that our readers will be able to indulge decide from the vast variety of selection from the market place.
	</center>
	</p> 
	<h1>
			
				
	  </div>


	



 
<div id="calendar">
     <p id="calendar-day"></p>
     <p id="calendar-date"></p>
     <p id="calendar-month-year"></p>
    </div>
    
  </div>
</body>
</html>
