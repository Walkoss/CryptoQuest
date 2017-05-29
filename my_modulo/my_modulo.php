<?php

function error() {
	echo "va t'acheter des doigts !\n";
	return (-1);
}

function my_modulo($int, $n) {
	if (!is_int($int) || !is_int($n))
		return (error());
	else if (!$n)
		return (error());
	return $int - (intval($int / $n) * $n);
}