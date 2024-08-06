<?php

$conn = "";
try {
$servername = "127.0.0.1:3306";
$username = "u496524825_export";
$password = "Ajay@1234web";
$dbname = "u496524825_export";
	$conn = new PDO(
		"mysql:host=$servername; dbname=u496524825_export",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
<?php


function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT `supp_id`, `name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`, `plan`, `date_created`, `plan_started`, `date_expire`, `filename`, `eid`, `about`, `custom_field`, `about_image` FROM `supplier` WHERE username='$username'");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['username'] == $username) &&
			($user['password'] == $password)) {
				  // Session Variables are created
				  $_SESSION["user"] = $username;  


 
				  // Login time is stored in a session variable
				  $_SESSION["login_time_stamp"] = time(); 
				header("location: index.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>

