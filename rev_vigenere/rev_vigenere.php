<?php
function my_modulo($int, $n)
{
	if (!is_int($int) || !is_int($n))
	{
		echo "va t'acheter des doigts !\n";
		return ($int);
	}
	else if (!$n)
	{
		echo "va t'acheter des doigts !\n";
		return ($int);
	}
	while ($int < 0 || $int >= abs($n))
	{
		if (($int < 0 && $n < 0) || ($int > 0 && $n > 0))
			$int -= $n;
		else
			$int += $n;
	}
	return ($int);
}

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

function rev_vigenere($str, $key)
{
	if (!is_string($str) || !is_string($key) || empty($str) || empty($key))
	{
		echo "va t'acheter des doigts !\n";
		return(-1);
	}
	$encoded = "";
	$key_chain = strrev(substr(str_repeat($key, ceil(strlen($str)/strlen($key))), 0, strlen($str))) . "\n";
	for ($i = 0; $i < strlen($str); $i++)
	{
		if (preg_match("/^[a-z]$/", $key_chain[$i])){
			$encoded .= cesar($str[$i], ord($key_chain[$i]) - 97, 1);
		}
		else if (preg_match("/^[A-Z]$/", $key_chain[$i]))
			$encoded .= cesar($str[$i], ord($key_chain[$i]) - 65, 1);
		else
			$encoded .= $str[$i];
	}
	return $encoded;
}
