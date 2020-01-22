<?php
    if ($_POST['login'] == ""|| $_POST['oldpw'] == "" || $_POST['newpw'] == "" || $_POST['submit'] != "OK")
    {
		echo("ERROR\n");
		exit();
	}
	$array = unserialize(file_get_contents("../private/passwd"));
	foreach ($array as $elem)
	{
		if ($elem['login'] == $_POST['login'])
		{
			$oldpw = hash("whirlpool",  $_POST['oldpw']);
			if ($oldpw == $elem['passwd'])
			{
				$elem['passwd'] = hash("whirlpool", $_POST['newpw']);
				file_put_contents('../private/passwd', serialize($elem));
				echo("OK\n");
				exit();
			}
			else
			{
				echo("ERROR\n");
				exit();
			}
		}
	}
	echo("ERROR\n");
?>