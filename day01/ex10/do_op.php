#!/usr/bin/php
<?php
	if ($argc != 4) {
		echo "Incorrect Parameters";
		exit;
	}
	$argv[1] = rtrim($argv[1]);
	$argv[2] = rtrim($argv[2]);
	$argv[3] = rtrim($argv[3]);
	if ($argv[2] == "+")
		echo ($argv[1] + $argv[3]) ."\n";
	if ($argv[2] == "-")
		echo ($argv[1] - $argv[3]) ."\n";
	if ($argv[2] == "*")
		echo ($argv[1] * $argv[3]) ."\n";
	if ($argv[2] == "/")
		echo ($argv[1] / $argv[3]) ."\n";
	if ($argv[2] == "%")
		echo ($argv[1] % $argv[3]) ."\n";
?>