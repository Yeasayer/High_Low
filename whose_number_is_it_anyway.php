<?php

$realNum = mt_rand($argv[1], $argv[2]);
$guessCount = 0;
fwrite(STDOUT, "Guess a number fool!\n");
$guessNum = fgets(STDIN);




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
exit(0);
?>