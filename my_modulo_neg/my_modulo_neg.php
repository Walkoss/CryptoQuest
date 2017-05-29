<?php

function error($int)
{
	echo "va t'acheter des doigts !\n";
	return ($int);
}

function my_modulo_neg($int, $n)
{
	if (!is_int($int) || !is_int($n))
		return (error($int));
	else if (!$n || $n > 0)
		return (error($int));
	return $int - (intval($int / $n) * $n);
}
