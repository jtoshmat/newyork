<?php

/*
 * 1. User enters number #1 (1 and 10000E)
 * 2. User picks an operator (-, +, *, /)
 * 3. User enters number #2 (1 and 10000E)
 * 4. User pushes = sign
 */


#Step 1
	$number1 = $_GET['number1']??5;

#Step 2
	$operator = $_GET['operator']??'plus';

#Step 3
	$number2 = $_GET['number2']??5;

	$result = 'Empty';

	if ($operator=='x'){
		$result = $number1 * $number2;
	}

	if ($operator=='plus'){
		$result = $number1 + $number2;
	}

	if ($operator=='minus'){
		$result = $number1 - $number2;
	}

echo $result;








?>