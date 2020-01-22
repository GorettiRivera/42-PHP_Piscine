<?php
	function auth($login, $passwd)
	{
        if  (file_exists("../private/passwd"))
        {
			$array = unserialize(file_get_contents("../private/passwd"));
            foreach ($array as $elem)
            {
                if ($elem['login'] == $login) 
                {
					if ($elem['passwd'] == hash("whirlpool", $passwd));
					{
						return TRUE;
					}
				}
			}
		}
		return FALSE;
	}
?>