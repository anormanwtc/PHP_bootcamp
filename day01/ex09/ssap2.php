#!/usr/bin/php
<?php
if ($argc < 2)
	exit;
unset($argv[0]);
$final = implode(" ", $argv);
$final = explode(" ", $final);
sort($final);
usort($final, 'strcasecmp');
$cnt = 0;
while ($final[$cnt])
{
	if (ctype_alpha($final[$cnt][0])) {
		echo $final[$cnt] . "\n";
	}
	$cnt += 1;
}
$cnt = 0;
while ($final[$cnt])
{
	if (is_numeric($final[$cnt])) {
		echo $final[$cnt] . "\n";
	}
	$cnt += 1;
}
$cnt = 0;
while ($final[$cnt])
{
	if (!is_numeric($final[$cnt]) && !ctype_alpha($final[$cnt][0])) {
		echo $final[$cnt] . "\n";
	}
	$cnt += 1;
}
?>