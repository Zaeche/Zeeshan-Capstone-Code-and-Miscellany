<?php
session_start(); /// initialise session
include("redChickens.php");
check_logged();
?>

<?php
if (isset($_POST["status"]))
{	
	header("Location: statusSwitch.php");
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<link rel = "stylesheet" type ="text/css" href = "feedback.css" />
	<title> Control Panel </title>
</head>
<body>
<div id = "header">
<a href = "homepage.php"><img src = "Home_Button.png" /></a>
<a href = "feedback.php"><img src = "Results.png" /></a>
<a href = "about.php"><img src = "about-us.png" /></a>
<a href = "logout.php"><img src = "Logout.png" /></a>

</div>
<div id = "content">
<div id = "main-top"><!-- Leave this empty --></div>
<div id = "main-center">
<div class ="info">

<h1> Feedback and Anaylsis  </h1>
<h2> The following are the options available to you, the user.  </h2>
<h2> By clicking the buttons below, you may: </h2>

<p>  i) Check the state of the system as reported by the switches. </p>
<p>  ii) Check the state of the system as dictated by the user.  </p>


		
<form method=post><button name="status" value="status" class="IR"
  id="IRbutton5"><em></em>Status</button>


</div>

	<div id ="main-bottom"><!--Leave this empty --></div>
	<div id = "footer">
	<div class="copyright">
	</div>
	</div>

	</div>
</body>
</html>

