#!/usr/bin/php
<?php
	// $string = 'The quick brown fox jumps over the lazy dog.';
	// $patterns = array();
	// $patterns[0] = '/quick/';
	// $patterns[1] = '/brown/';
	// $patterns[2] = '/fox/';
	// $replacements = array();
	// $replacements[2] = 'bear';
	// $replacements[1] = 'black';
	// $replacements[0] = 'slow';
	// echo preg_replace($patterns, $replacements, $string);


// $bin = pack("c2n2",0x1234,0x5678,65,66);
// print_r(unpack("c2chars/n2int",$bin));

$url = 'http://www.42.fr';

var_dump(parse_url($url));
// var_dump(parse_url($url, PHP_URL_SCHEME));
// var_dump(parse_url($url, PHP_URL_USER));
// var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_HOST));
// var_dump(parse_url($url, PHP_URL_PORT));
// var_dump(parse_url($url, PHP_URL_PATH));
// var_dump(parse_url($url, PHP_URL_QUERY));
// var_dump(parse_url($url, PHP_URL_FRAGMENT));

?>