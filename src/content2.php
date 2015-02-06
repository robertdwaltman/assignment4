<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Content2</title>
</head>
<body>
	<?php
	//catch a user without a session and remind them to log in
	if(empty($_POST['username']) && !isset($_SESSION['username'])){
		echo "You are not logged in, please visit the login page <a href='login.php'>HERE</a>";
	} 
	else{
		if(session_status() == PHP_SESSION_ACTIVE){
			if(isset($_POST['username'])){
				$_SESSION['username'] = $_POST['username'];
			}
			if(!isset($_SESSION['page2visits'])){
				$_SESSION['page2visits'] = 0; //start the visit counter for page 2
			}
			$_SESSION['page2visits']++;
			echo "Hello $_SESSION[username], you have visited this page $_SESSION[page2visits] times. <br>";
			echo "This is page 2! <br>";
			echo "Click <a href ='content1.php'>HERE</a> to visit Page 1. <br>";
			echo "Click <a href='login.php?logout=true'>HERE</a> to logout and return to the main page.";
		}
	}
	?>
</body>
</html>