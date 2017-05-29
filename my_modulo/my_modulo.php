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
	return ($int - (intval($int / $n) * $n));
}
