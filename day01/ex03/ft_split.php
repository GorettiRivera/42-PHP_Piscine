#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $my_list = explode(" ", $str);
        $sort_list = array_values(array_filter($my_list));
        /*
        array_filter --> as we didnt specified any callback function, all the values
        of the array which are equal to FALSE will be removed such as an empty string/NULL values.
        */
        //array_values --> returns all the values from the array and indexes the array numerically.
        sort($sort_list);
        return ($sort_list);
     };
?>