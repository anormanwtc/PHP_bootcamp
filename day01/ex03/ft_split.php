<?php
	function ft_split($input)
	{
		$split = explode(" ",$input);
		#separates the string into a 2D by spaces
		$split = array_filter($split, 'strlen');
		#removes the array elements where strlen is false
		sort($split);
		return $split;
	}
?>