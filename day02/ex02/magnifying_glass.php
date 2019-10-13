#!/usr/bin/php
<?php
	if ($argc < 2 || !file_exists($argv[1]))
		exit;
	function section_toupper($matches) {
		return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
	}
	$file = fopen($argv[1], "r");
	$input = fread($file, filesize($argv[1]));
	$input = preg_replace_callback('/<a.*?title(=".*?").*?>/s', 'section_toupper', $input);
	$input = preg_replace_callback('/<a.*?(>.*?<)/s', 'section_toupper',  $input);
		# . is any characters; * is zero or more; ? is only 1;
		# together these become (one set of any number of characters)
		# /s' (the s option) lets the . match newlines (default is no)
	echo $input;
?>