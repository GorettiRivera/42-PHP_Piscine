#!/usr/bin/php
<?php
    if ($argc == 1)
        exit();
    date_default_timezone_set('Europe/Paris');
    //format: Day_of_the_week Number_of_day Month Year Hours:Minutes:Seconds 
    $preg = preg_match('/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[jJ]eudi|[vV]endredi|[sS]amedi|[dD]imanche) ([0-9]|1[0-9]|2[0-9]|3[0-1]) ([jJ]anvier|[fF]evrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]écembre) ([0-9]{4}) (([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]))$/', $argv[1], $matches);
    $months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août","septembre", "octobre", "novembre", "décembre"];
    $month = ($month = array_search(strtolower($matches[3]), $months)) ? $month + 1 : false;
    if (!$month)
    {
        echo "Wrong Format\n";
        exit;
    }
    $time = $matches[4] . '-' . $month . '-' . $matches[2] . ' ' . $matches[5];// format: YYYY-MM-DD HH:MM:SS
    $time = strtotime($time);
    if (!$time || !$preg)
        echo "Wrong Format\n";
    else
        echo $time . "\n";
?>