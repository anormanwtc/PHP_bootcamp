#!/usr/bin/php
<?php
	$cnt = 1;
	while ($argc > $cnt)
	{
		echo $argv[$cnt] . "\n";
		$cnt = $cnt + 1;
	}
?>