<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Loopback</title>
</head>
<body>
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'GET'){ //if it's a get request, use this
		$arr = array("Type" => "GET");
		if($_GET == null){ //if there was nothing passed, indicate null
			$arr["parameters"] = "null";
		} else{
			$arr = array_merge($arr, $_GET); //combine the get request with the previous array
		}
		echo json_encode($arr); //output it as a JSON object
	}
	else if($_SERVER['REQUEST_METHOD'] == 'POST'){ //if it's a post request, use this
		$arr = array("Type" => "POST");
		if($_POST == null){ //if nothing was passed, indicate null
			$arr["parameters"] = "null";
		} else{
			$arr = array_merge($arr, $_POST); //combine the post request with the previous array
		}
		echo json_encode($arr); //output it as a JSON object
	}
	?>
</body>
</html>
