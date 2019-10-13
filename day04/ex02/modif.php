<?php
	if ($_POST['submit'] !== 'OK' || $_POST['login'] == '' || $_POST['newpw'] == '' || $_POST['oldpw'] == '') {
		echo "ERROR\n";
		return;
	}
	if (file_exists("../private/passwd"))
	{
        $user_data = unserialize(file_get_contents("../private/passwd"));
		foreach ($user_data as &$user)
		{
			if ($user["login"] === $_POST["login"])
			{
				if ($user['passwd'] === hash('whirlpool', $_POST["oldpw"]))
				{
					$user['passwd'] = hash('whirlpool', $_POST["newpw"]);
					file_put_contents("../private/passwd", serialize($user_data));
					echo "OK\n";
					return;
				}
				else {
					echo "ERROR\n";
					return;
				}
            }
		}
	}
	else
		echo "ERROR\n"
?>