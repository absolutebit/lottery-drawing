<?php

$block_hash = "";
$active_players = 10;

$answer_key = preg_replace("/[^0-9]/", "", $block_hash);

$winner = substr($answer_key, -1, 1);
if($winner == 0) $winner = 10;

$jackpot0 = substr($answer_key, -1, 1);
$jackpot1 = substr($answer_key, -2, 1);
$jackpot2 = substr($answer_key, -3, 1);

$n=1;
while($winner > $active_players) {
  $n++;
  $nn = $n * -1;
  $winner = substr($answer_key, $nn, 1);
  if($winner == 0) $winner = 10;
  if($n > strlen($answer_key)) {
  	$winner = 1;
	$active_players = 1;
   }
}

echo "Answer Key: ".$answer_key."\r\n";
echo "Player in position #".$winner." won!\r\n";

if($winner == $jackpot0) {
	if($winner == $jackpot1 && $winner == $jackpot2) {
	   echo "They also won the jackpot.\r\n";
	}
}

?>
