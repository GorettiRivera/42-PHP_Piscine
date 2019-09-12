#!/usr/bin/php
<?php
    function ft_is_sort($tab)
    {
        $tmp = $tab;
        sort($tmp);
        for($i = 0; $i < count($tab); $i++)
        {
            $value = strcmp($tab[$i], $tmp[$i]);
            if (strcmp($tab[$i], $tmp[$i]))
                return FALSE;
            
        }
        return TRUE;
    };
?>