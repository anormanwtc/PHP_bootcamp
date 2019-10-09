<?php
	function ft_split($input)
	{
		$split = preg_split('/\s+/', $input);
		sort($split);
		return $split;
	}
?>