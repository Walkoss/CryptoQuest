<?php

function my_congru($a, $b, $n)
{
    if (!$n || !is_int($a) || !is_int($b) || !is_int($n))
    {
        echo "va t'acheter des doigts !\n";
        return (-1);
    }
    else if (is_int(($a - $b) / $n))
        return (1);
    return (0);
}

function is_classeq($tab, $x, $n)
{
    if (!is_array($tab) || empty($tab))
    {
        echo "va t'acheter des doigts !\n";
        return (-1);
    }
    foreach ($tab as $value) {
        if (!is_int($value))
        {
            echo "va t'acheter des doigts !\n";
            return (-1);
        }
    }
    foreach ($tab as $value)
    {
        $my_congru_result = my_congru2($value, $x, $n);
        if ($my_congru_result !== 1)
            return ($my_congru_result);
    }
    return (1);
}