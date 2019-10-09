#!/usr/bin/php
<?php
if ($argc < 2)
	exit;
$final = explode(" ",$argv[1]);
$final = array_filter($final, 'strlen');
$cnt = 2;
while ($argc > $cnt) {
	$split = explode(" ",$argv[$cnt]);
	$split = array_filter($split, 'strlen');
	$final = array_merge($final, $split);
	$cnt += 1;
}
sort($final);
$cnt = 0;
while ($final[$cnt])
{
	echo $final[$cnt] . "\n";
	$cnt += 1;
}
?>