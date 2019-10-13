#!/usr/bin/php
<?php
	if ($argc < 2)
		exit;
	if (!parse_url($argv[1])) {
		echo "Invalid url";
		exit;
	}
	$html = file_get_contents($argv[1]);
	preg_match_all('|<img .*?src=[\'"](.*?)[\'"].*?\>|si', $html, $matches);
	foreach($matches[1] as $link) {
		$img = substr($link, strrpos($link, "/"));
		echo $img . "\n";
		// if (!strncmp($link, "http", 4))
		// 	copy($link, $dir."/".$img);
		// elseif (!strncmp($link, "/", 1))
		// 	copy($argv[1].$link, $dir."/".$img);
		// elseif (!strncmp($link, "./", 2))
		// 	copy($argv[1].ltrim($link, '.'), $dir."/".$img);
		// else
		// 	copy($argv[1]."/".$link, $dir."/".$img);
	}
?>