<?php

session_start();
try {

    if(isset($_SESSION['user']))
        header('Location: welcome.php');
    require_once 'DB_CONFIG/connect_db.php';
    $msg1 = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
		if(isset($_POST['login'])){
		$username = $_POST["username"];
        $password = $_POST["password"];
      
        $sql = "SELECT * FROM allusers WHERE username = '".$username."' AND password = '".$password."'";
           
             $result = $db->query($sql);
            if ($result->num_rows>0) {

               $test="admin";
                if($username == $test){
                    $_SESSION['user'] = $username;
				$home_url = './admin/index.php';
header('Location: '.$home_url);
         
				 
				
				}else{			$_SESSION['user'] = $username;
			 header('Location: welcome.php');
				}
                die();

            }



            $msg1 = "Username and password wrong!";
        }
        if(isset($_POST['register'])){
            $name = $_POST["name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];
			
			if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    // Return Error - Invalid Email
   // $msg2 = 'The email you have entered is invalid, please try again.';
}else{
    // Return Success - Valid Email
   // $msg2 = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
}
			//$hash = md5( rand(0,1000) );
            //$dob = $_POST["dob"];
			
        

	
            $sql = "INSERT INTO allusers (name,email,username,password) VALUES ('$name','$email','$username','$password')";

            $db->query($sql);
            if($db->affected_rows>0) {

                $msg1 = "You have Registered Successfully!";
							
            }

        }
	}
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>

<head>
<title>Phones</title>
<script type="text/javascript" src="script.js"></script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="css/style.css">
<style>
        #header-wrapper #header #logo p {
	color: white;
}
        #header-wrapper #header #logo h2 {
	color: white;
}
        #header-wrapper #header #logo h1 a {
	font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}

#wrap .statusmsg{
    font-size: 12px; /* Set message font size  */
    padding: 3px; /* Some padding to make some more space for our text  */
    background: #EDEDED; /* Add a background color to our status message   */
    border: 1px solid #DFDFDF; /* Add a border arround our status message   */
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
					echo ("<li ><a href=\"welcome.php\" >My Page</a></li>");
				}else
				{
					echo ("<li><a href=\"index.php\" accesskey='1' >Home</a></li>");
				}

				?>
						
				<li ><a href="types.php" accesskey="2" title="">Phones</a></li>

                <?php

                if(isset($_SESSION['user']))
                {
                    echo ("<li><a href=\"logout.php\" >Logout</a></li>");
                }else
                {
                    echo ("<li class='current_page_item'><a href=\"login.php\" >Login</a></li>");
                }


                ?>

			

				
				<li><a href="about.php" >About</a></li>
				<li><a href="feedback.php" >Feedback</a></li>
				
			</ul>
		</div>
	</div>


	



 
<div id="calendar">
     <p id="calendar-day"></p>
     <p id="calendar-date"></p>
     <p id="calendar-month-year"></p>
    </div>
    
  </div>
</body>
</html>