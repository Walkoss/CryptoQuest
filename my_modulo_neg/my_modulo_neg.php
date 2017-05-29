<?php

function my_modulo_neg($int, $n)
{
	if (!is_int($int) || !is_int($n))
	{
		echo "va t'acheter des doigts !\n";
		return ($int);
	}
	else if ($n >= 0)
	{
		echo "va t'acheter des doigts !\n";
		return ($int);
	}
	return ($int - (intval($int / $n) * $n));
}
