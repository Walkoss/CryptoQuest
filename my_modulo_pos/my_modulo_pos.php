<?php

function my_modulo_pos($int, $n)
{
	if (!is_int($int) || !is_int($n) || $n <= 0)
		echo "va t'acheter des doigts !\n";
	else
		while ($int < 0 || $int >= abs($n))
			if (($int < 0 && $n < 0) || ($int > 0 && $n > 0))
				$int -= $n;
			else
				$int += $n;
	return ($int);
}
