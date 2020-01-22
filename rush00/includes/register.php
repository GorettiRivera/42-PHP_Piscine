<?php
$connection = mysqli_connect("10.10.125.109:3306", "phpshit", "master123456", "testing");
$id = rand(0, 1000);
$query = "SELECT * FROM users";
$crap = mysqli_query($connection, $query);
$found = 0;
foreach($crap as $morecrap){
	if (in_array($_POST['uid'], $morecrap)){
		$found = 1;
		break;
	}
}
if (!$found && $_POST["uid"] && $_POST["pwd"]){
	$query = "INSERT INTO users (id, username, password) VALUES ($id , '".$_POST["uid"]."', '".$_POST["pwd"]."')";
	$crap = mysqli_query($connection, $query);	
	session_start();
	$_SESSION["user_id"] = $id;
	$_SESSION["username"] = $_POST["uid"];
}
header("Location: ../index.php");
?>