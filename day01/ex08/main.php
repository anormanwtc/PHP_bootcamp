<?PHP
include("ft_is_sort.php");
$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
if (ft_is_sort($tab))
	echo "sorted";
else
	echo "not sorted";
?>