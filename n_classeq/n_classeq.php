<?php

function n_classeq($tab, $x)
{
    if (!is_array($tab) || empty($tab) || !is_int($x) || $x <= 0)
    {
        echo "va t'acheter des doigts !\n";
        return (-1);
    }
    foreach ($tab as $value) {
        if (!is_int($value) || $value <= 0)
        {
            echo "va t'acheter des doigts !\n";
            return (-1);
        }
    }
    for ($n = 2; $n <= max($tab); $n++)
    {
        $is_classeq_result = is_classeq($tab, $x, $n);
        if ($is_classeq_result)
            return ($n);
        else if ($is_classeq_result === -1)
            return (-1);
    }
    return (0);
}