<?php

function my_congru($a, $b, $n)
{
    if (!$n)
    {
		echo "va t'acheter des doigts !\n";
		return (-1);
    }
    else if (is_int(($a - $b) / $n))
        return (1);
    return (0);
}