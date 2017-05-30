<?php

function my_modulo($int, $n)
{
	if (!is_int($int) || !is_int($n))
	{
		echo "va t'acheter des doigts !\n";

		return ($int);
	}
	else if (!$n)
	{
		echo "va t'acheter des doigts !\n";

		return ($int);
	}
	while ($int < 0 || $int >= abs($n))
	{
		if (($int < 0 && $n < 0) || ($int > 0 && $n > 0))
			$int -= $n;
		else
			$int += $n;
	}

	return ($int);
}