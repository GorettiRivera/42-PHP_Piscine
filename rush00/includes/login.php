<?php
session_start();
$connection = mysqli_connect("10.10.125.109:3306", "phpshit", "master123456", "testing");
$user = $_POST["uid"];
$password = $_POST["pwd"];
$query = "SELECT * FROM users";
$crap = mysqli_query($connection, $query);
foreach($crap as $morecrap){
	if (in_array($user, $morecrap)){
		if (!strcmp($password, $morecrap["password"])){
			$auth = 1;
			break;
		}
	}
}
if ($auth){
    $_SESSION["username"] = $morecrap["username"];
    $_SESSION["user_id"] = $morecrap["id"];
}
header("Location: ../index.php");
?>