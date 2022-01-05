<!DOCTYPE html>
<html>
	<body>
		<?php
		echo "Palindrome Number[same from forward and backward]";
		echo "<br/>";
		echo "________________________________________";
		echo "<br/>";
		#string
		$s1 = "bob";
		$s2 = strrev($s1);
		echo "The string is '$s1'";
		echo "<br/>";
		if ($s1 == $s2)
		{
			echo nl2br("This is Palindrome String");
			echo "<br/>";
		}
		else
		{
			echo "This is not Palindrome String";
			echo "<br/>";
		}
		echo "________________________________________";
		echo "<br/>";
		#number
		$n1 = "1232";
		$rn2 = strrev($n1);
		echo "The number is '$n1'";
		echo "<br/>";
		if ($n1 == $rn2)
		{
			echo nl2br("This is Palindrome number");
			echo "<br/>";
		}
		else
		{
			echo "This is not Palindrome number";
			echo "<br/>";
		}
		echo "________________________________________";
		echo "<br/>";
		?>
	</body>
</html>