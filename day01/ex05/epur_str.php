#!/usr/bin/php
<?php
	if ($argc != 2)
		exit();
	$str_list = preg_replace("/\s+/", " ", $argv[1]);
	$str = trim($str_list);
	echo ("$str\n");
?>