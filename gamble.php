<?php

$money = 200;
$cash = 200;
$min = 1;
$max = 20;

for($q = 1; $q <= 100; $q++) {
	$cash += 10;
	$money += 10;
	$roll = rand(0, 100);
	echo "Current balance " . $cash . "<br/>\n";
	
	//$bet = floor($cash / 4);
	
	$bet = 1;
	
	if($bet == 0) {
		echo "Broke after" . $q . " turn";
		break;
	}
	$cash -= $bet;
	echo "Bet " . $bet . "<br/>\n";
	if($roll >= 99) {
		$bet *= 3;
		echo "won " . $bet . " <br/>\n";
	}
	elseif($roll >= 61) {
		$bet *= 2;
		echo "won " . $bet . " <br/>\n";
	}
	else {
		$bet = 0;
		echo "lost " . $bet . " <br/>\n";
	}
	$cash += $bet;
	echo "End balance " . $cash . "<br/><br/>\n\n";
}
echo "NO GAMBLE " . $money;
?>