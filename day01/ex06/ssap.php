#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $my_list = explode(" ", $str);
        $sort_list = array_values(array_filter($my_list));
        sort($sort_list);
        return ($sort_list);
    };

    if ($argc > 1)
    {
        $arr = array();
        for ($i = 1; $i < count($argv); $i++)
        {
            $str = trim(preg_replace("/\s+/", " ", $argv[$i]));
            $splited = ft_split($str);
            for ($j = 0; $j < count($splited); $j++)
            {
                $word = array_push($arr, $splited[$j]);
            }
        }
        sort($arr);
        foreach ($arr as $elem)
        {
            echo ("$elem\n");
        }
    }
?>
