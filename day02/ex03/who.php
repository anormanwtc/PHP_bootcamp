#!/usr/bin/php
<?php
	$source = "/var/run/utmpx";
	if (!file_exists($source))
		exit;
	date_default_timezone_Set("Africa/Johannesburg");
	$file = fopen($source, "r");
	$list = array();
	while ($line = fread($file, 628)) { //the 628 is the full size of the thing
						//the remainder of the 628 after the unpack is not needed
		$line = unpack("a256user/a4id/a32line/ipid/itype/I2time/", $line);
		// unpack:	a is null padded string, 256 is the bytesize of the utmpx user
		// 			i is signed integer;
		//			I is unsigned integer, 2 is 2 of them (becomes time1 and time2);
		if (strcmp($line['type'], "7") == 0)
			$list[] = $line;
	}
	fclose($file);
	foreach($list as $user) {
		echo $user['user'] ." ". $user['line'] ." ". date("M j H:i", $user['time1']) ."\n";
	}
// 	https://code.woboq.org/userspace/glibc/sysdeps/gnu/bits/utmpx.h.html
//	https://www.geeksforgeeks.org/php-unpack-function/
?>