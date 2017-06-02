<?php

function remove_accent($str)
{
    return iconv('utf-8', 'ASCII//TRANSLIT//IGNORE', $str);
}

function encrypt_string($str, $n)
{
    $encrypted_array = array_map(function ($c) use ($n) {
        if (preg_match("/^[a-z]$/", $c))
            return chr(my_modulo((ord($c) - ord('a')) + $n, 26) + ord('a'));
        else if (preg_match("/^[A-Z]$/", $c))
            return chr(my_modulo((ord($c) - ord('A')) + $n, 26) + ord('A'));

        return ($c);
    }, str_split(remove_accent($str)));

    return (implode($encrypted_array));
}

function decrypt_string($str, $n)
{
    $decrypted_array = array_map(function ($c) use ($n) {
        if (preg_match("/^[a-z]$/", $c))
            return chr(my_modulo((ord($c) - ord('a')) - $n, 26) + ord('a'));
        else if (preg_match("/^[A-Z]$/", $c))
            return chr(my_modulo((ord($c) - ord('A')) - $n, 26) + ord('A'));

        return ($c);
    }, str_split(remove_accent($str)));

    return (implode($decrypted_array));
}

function cesar($str, $n, $flag)
{
    if (!is_string($str) || !is_int($n) || ($flag !== 0 && $flag !== 1))
    {
        echo "va t'acheter des doigts !\n";
        return (-1);
    }
    if ($flag === 1)
        return (encrypt_string($str, $n));
    return (decrypt_string($str, $n));
}