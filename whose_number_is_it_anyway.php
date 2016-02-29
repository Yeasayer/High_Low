<?php

fwrite(STDOUT, "Guess a number fool!\n");

$realNum = mt_rand(1, 100);
$guessNum = fgets(STDIN);
$guessCount = 0;
echo "$realNum\n";

do {
	if ($guessNum > $realNum){
		$guessCount += 1;
		fwrite(STDOUT, "Guess lower fool!\n");
		$guessNum = fgets(STDIN);
		
	} else {
		$guessCount += 1;
		fwrite(STDOUT, "Guess higher fool!\n");
		$guessNum = fgets(STDIN);
	}
} while ($guessNum != $realNum);

if ($guessNum == $realNum){
	$guessCount += 1;
	fwrite(STDOUT, "You did it in $guessCount guesses!\n");
}
?>