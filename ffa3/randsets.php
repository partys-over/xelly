<?php

include('vars1.php');
include('vars2.php');
include('vars3.php');

$shmtest = get_defined_vars();
$nonshuffle = get_defined_vars();

$shufflevar = shuffle($shmtest);
echo ('Set count: ' . count($shmtest) . "<br />");


foreach ($shmtest as $key => $value) {
	if (is_array($value) == false) {
		$value = str_replace("Tera Type: &\n", '', $value);
		if (strlen($value) > 2) {
			echo nl2br ($value . "<br />");
		}

	}
}

?>