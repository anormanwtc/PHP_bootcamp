#!/usr/bin/php
<?php
	if ($argc > 1) {
		$split = preg_replace('/\s+/', " ", trim($argv[1]));
		echo $split ."\n";
	}
?>