<?php

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
