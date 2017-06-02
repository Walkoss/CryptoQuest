<?php

function encrypt_string2($str, $n, $alpha)
{
    $alphabet= array();
    for ($i = 0; $i < strlen($alpha); $i++)
	$alphabet[] = $alpha[$i];
    $encrypted_array = array_map(function ($c) use ($n, $alphabet) {
        if (preg_match("/^[a-z]$/", $c))
            return $alphabet[my_modulo((ord($c) - ord('a')) + $n, 26)];
        else if (preg_match("/^[A-Z]$/", $c))
            return $alphabet[my_modulo((ord($c) - ord('A')) + $n, 26)];
        return ($c);
    }, str_split(remove_accent($str)));

    return (implode($encrypted_array));
}

function decrypt_string2($str, $n, $alpha)
{
    $alphabet = array();
    for ($i = 0; $i < strlen($alpha); $i++)
	$alphabet[$alpha[$i]] = $i;
    $decrypted_array = array_map(function ($c) use ($n, $alphabet) {
	if (preg_match("/^[a-z]$/", $c))
		return chr(my_modulo($alphabet[$c] - $n, 26) + ord('a'));
        else if (preg_match("/^[A-Z]$/", $c))
		return chr(my_modulo($alphabet[$c] - $n, 26) + ord('A'));
        return ($c);
    }, str_split(remove_accent($str)));

    return (implode($decrypted_array));
}

function advanced_cesar($str, $n, $alpha, $flag)
{
    if (!is_string($str) || !is_string($alpha) || strlen($alpha) != 26 || !is_int($n) || ($flag !== 0 && $flag !== 1))
    {
	echo "va t'acheter des doigts !\n";
        return (-1);
    }
    if ($flag === 1)
        return (encrypt_string2($str, $n, $alpha));
    return (decrypt_string2($str, $n, $alpha));
}
