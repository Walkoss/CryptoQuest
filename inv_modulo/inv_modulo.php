<?php

function inv_modulo($a, $n)
{
    if (!is_int($a) || !is_int($n) || !$n)
    {
        echo "va t'acheter des doigts !\n";
        return (0);
    }
    for ($i = 1; $i < $n; $i++)
    {
        $my_modulo_result = my_modulo($a * $i, $n);
        if ($my_modulo_result === 1)
            return ($i);
    }
    echo "va t'acheter des doigts !\n";
    return (0);
}