<?php
	function ft_is_sort($input) {
		$temp = $input;
		sort($temp);
		$cnt = 0;
		while ($temp[$cnt] == $input[$cnt] && $input[$cnt])
			$cnt++;
		if ($input[$cnt])
			return (false);
		return(true);
	}
?>