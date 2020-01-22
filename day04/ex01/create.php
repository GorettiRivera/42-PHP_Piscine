<?php
    if ($_POST['login'] == ""|| $_POST['passwd'] == ""||$_POST['submit'] != "OK") 
    {
		echo("ERROR\n");
		exit();
	}
	if  (file_exists("../private/passwd")) {
		$array = unserialize(file_get_contents("../private/passwd"));
		foreach ($array as $e) {
			if ($e['login'] == $_POST['login']) {
				echo("ERROR\n");
				exit();
			}
		}
	}
	if (file_exists("../private/passwd")) {
		$data = unserialize(file_get_contents("../private/passwd"));
		$login = $_POST['login'];
		$passwd = hash("whirlpool", $_POST['passwd']);
		$array['login'] = $login;
		$array['passwd'] = $passwd;
		$data[] = $array;
		file_put_contents("../private/passwd", serialize($data));
		echo("OK\n");
	} else {
		mkdir("../private", 0700);
		$login = $_POST['login'];
		$passwd = hash("whirlpool", $_POST['passwd']);
		$array['login'] = $login;
		$array['passwd'] = $passwd;
		$data[] = $array;
		file_put_contents("../private/passwd", serialize($data));
		echo("OK\n");
	}
?>