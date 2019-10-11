#!/usr/bin/php
<?php
if ($argc < 2)
	exit;
unset($argv[0]);
$final = trim(implode(" ", $argv));
$final = preg_split('/\s+/', $final);
sort($final);
$cnt = 0;
while (($final[$cnt]))
{
	echo $final[$cnt] ."\n";
	$cnt += 1;
}
?>