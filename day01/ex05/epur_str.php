#!/usr/bin/php
<?php
if ($argc != 2)
	exit;
$argv[1] = trim($argv[1], " ");
$argv[1] = preg_replace('/\s+/', " ", $argv[1]);
echo $argv[1];
?>