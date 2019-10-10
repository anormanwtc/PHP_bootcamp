#!/usr/bin/php
<?php
while (1)
{
	echo "Enter a number: ";
	$input = trim(fgets(STDIN));
	$num = 1;
	$i = 0;
	if (feof(STDIN))
	{
		print "\n";
		exit;
	}
	if (is_numeric($input))
	{
		if (!bcmod($input, 2))
			echo "The number " . $input . " is even\n";
		else
			echo "The number " . $input . " is odd\n";
	}
	else	
		echo "'" . $input . "' is not a number\n";
}
?>