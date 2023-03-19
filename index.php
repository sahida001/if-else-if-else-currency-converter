<?php


$amount = 1200;
$type  = 'dollar';
$rate = 0;

if( $type == 'dollar'){
 
   $rate = 85.34;

}else if ($type == 'pound'){
  $rate = 116;

}else if ($type == 'euro'){
  $rate = 95;
}else if ($type == 'won'){
  $rate = 0.071;
}

$bdt = $amount * $rate;
echo "{$amount} {$type} = {$bdt} BDT";


?>