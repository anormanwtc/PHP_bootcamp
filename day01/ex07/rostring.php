#!/usr/bin/php
<?php
	if ($argc == 1)
		exit;
	if ($argc == 2) {
		echo $argv[1];
		exit;
	}
	$split = preg_split('/\s+/', $argv[1]);
	$temp = $split[0];
	unset($split[0]);
	$split = implode(" ", $split);
	echo $split . " " . $temp;
?>