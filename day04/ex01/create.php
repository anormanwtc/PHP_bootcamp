<?php
	#web video suggests whirlpool hashing
	if ($_POST['submit'] !== 'OK' || $_POST['login'] == "" || $_POST['passwd'] == "") {
		echo "ERROR\n";
		return;
	}
	if (!file_exists('../private'))
		mkdir('../private');
    if (file_exists("../private/passwd"))
    {
        $user_data = unserialize(file_get_contents("../private/passwd"));
        foreach ($user_data as $user)
        {
            if ($user["login"] === $_POST["login"]) {
                echo "ERROR\n";
                return;
            }
        }
    }
    $new["login"] = $_POST["login"];
    $new["passwd"] = hash('whirlpool', $_POST["passwd"]);
	$user_data[] = $new;
    file_put_contents("../private/passwd", serialize($user_data));
    echo "OK\n";
?>