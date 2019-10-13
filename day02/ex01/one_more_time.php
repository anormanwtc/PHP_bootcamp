#!/usr/bin/php
<?php
	if ($argc < 2)
	{
		echo "Wrong Format";
		exit;
	}
	$split = preg_split('/\s+/', trim($argv[1]));
	if ($split[5] || !$split[4])	#too many/too few words in argv
	{
		echo "Wrong Format";
		exit;
	}
	$month_ar = array("janvier" => 1,
	"fevrier" => 2,
	"mars" => 3,
	"avril" => 4,
	"mai" => 5,
	"juin" => 6,
	"juillet" => 7,
	"aout" => 8,
	"septembre" => 9,
	"octobre" => 10,
	"novembre" => 11,
	"decembre" => 12
	);
	$split[0][0] = lcfirst($split[0]);	#possible uppercase beginning
	$split[2][0] = lcfirst($split[2]);
	$argv[1] = implode(" ", $split);
		if (preg_match("/\A(\w+) ([0-9]{2}) (\w+) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})\z/", $argv[1], $matches)
		&& preg_match("/\A(lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche)\z/", $matches[1]) #split out for readability
		&& ($matches[3] = $month_ar[$matches[3]]))
	{
		date_default_timezone_set("Europe/Paris");
		echo(mktime($matches[5], $matches[6], $matches[7], $matches[3], $matches[2], $matches[4]));
	}
	else
		echo "Wrong Format";
?>