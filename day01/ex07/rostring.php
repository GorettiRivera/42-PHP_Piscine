#!/usr/bin/php
<?php
    if ($argc > 1)
	{
		for ($i = 0; $i < $argc; $i++)
		{
            $str = trim(preg_replace("/\s+/", " ", $argv[1]));
            $word_create_array = explode(" ", $str);
        }
        for ($i = 1; $i < count($word_create_array); $i++)
        {
            echo ($word_create_array[$i]." ");
        }
        echo ($word_create_array[0]."\n");
    }
?>