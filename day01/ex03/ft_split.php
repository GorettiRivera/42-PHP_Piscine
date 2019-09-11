#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $my_list = explode(" ", $str);
        $sort_list = array_values(array_filter($my_list));
        sort($sort_list);
        return ($sort_list);
    };
?>
