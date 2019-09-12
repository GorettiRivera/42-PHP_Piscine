#!/usr/bin/php
<?php
    if ($argc == 1)
    exit();
	$month = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août","septembre", "octobre", "novembre", "décembre");
	$week = array("lundi", "mardi", "mecredi", "jeudi", "vendredi", "samedi", "dimanche");
    $pattern = "#^[a-zA-Z]+\s\d{1,2}\s[a-zA-Zéû]+\s\d{4}\s[0-2]{1}[0-3]{1}:[0-5]{1}[0-9]{1}:[0-5]{1}[0-9]{1}$#";
    $in_str = $argv[1];
    if(preg_match($pattern, "$in_str") == FALSE)//returns true if pattern exists, and false otherwise
    {
        echo("Wrong Format\n");
        exit();
    }
    $date = explode(" ", $in_str);//create an array from the input
    $date[0] = strtolower($date[0]);//lowecase the weekday
    $date[2] = strtolower($date[2]);//lowercase the month
    $date[4] = explode(":", $date[4]);//create an array for the time
    $key1 = array_search($date[0], $week) + 1; //if it find it return the array position hence we need to +1. else return FALSE
    $key2 = array_search($date[2], $month) + 1;
    $date[0] = $key1;//assign the key example: lundu=1 mardi=2
    $date[2] = $key2;//assign the key example: novembre=11
    date_default_timezone_set("Europe/Paris");
    $time = mktime($date[4][0], $date[4][1], $date[4][2], $date[2], $date[1], $date[3]);//format: hour/minute/second/month/day/year 
    $day_of_week = date("N", $time);//return 1 (for Monday) through 7 (for Sunday)
    $correct_date = checkdate($date[2], $date[1], $date[3]);// Checks the validity of the date -- format: month/day/year
	if ($day_of_week != $date[0] || $correct_date == FALSE)
	{
		echo("Wrong Format\n");
		exit();
    }      
    echo("$time\n");    
?>