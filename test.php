<?php

// provides a phone number with only digits

$number = "(256) 956-443dss";

$clean_number = preg_replace('/\D/', '', $number);

$number_length = strlen($clean_number);

if ($number_length == '10') {
	echo "+1".$clean_number;
	}
else {
	echo "Bad Number";
} 
?>
