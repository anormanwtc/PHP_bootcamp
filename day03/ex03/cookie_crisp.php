<?php
	if ($_GET['action']) {
		if ($_GET['action'] == "set")
			setcookie($_GET['name'], $_GET['value'], time() + (3600), "/"); // 3600 = 1h
		else if ($_GET['action'] == 'get' && isset($_COOKIE[$_GET['name']]))
			echo $_COOKIE[$_GET['name']] . "\n";
		else if ($_GET['action'] == 'del')
			setcookie($_GET['name'], "", time() -1);
	}
?>