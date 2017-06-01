<?php

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
        $my_congru_result = my_congru($value, $x, $n);
        if ($my_congru_result !== 1)
            return ($my_congru_result);
    }
    return (1);
}