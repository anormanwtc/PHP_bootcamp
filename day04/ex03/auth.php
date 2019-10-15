<?php
	function auth($login, $passwd) {
	if (file_exists("../private/passwd"))
	{
        $user_data = unserialize(file_get_contents("../private/passwd"));
		foreach ($user_data as $user)
		{
			if ($user["login"] === $login)
			{
				if ($user['passwd'] === hash('whirlpool', $passwd))
					return true;
				else 
					return false;
            }
		}
	}
	return false;
	}
?>