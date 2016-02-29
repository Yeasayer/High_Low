<?php
if ((is_numeric($argv[1])) && (is_numeric($argv[2]))){
	$realNum = mt_rand($argv[1], $argv[2]);
} else {
	fwrite(STDOUT, "Put in a whole number for a range!\n");
	$argv[1] = fgets(STDIN);
	fwrite(STDOUT, "Put in another whole number for a range!\n");
	$argv[2] = fgets(STDIN);
	$realNum = mt_rand($argv[1], $argv[2]);
}
$guessCount = 0;
fwrite(STDOUT, "Guess a number fool!\n");
$guessNum = fgets(STDIN);




do {
	if ($guessNum > $realNum){
		$guessCount += 1;
		fwrite(STDOUT, "Guess lower fool!\n");
		$guessNum = fgets(STDIN);
		
	} elseif ($guessNum < $realNum){
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