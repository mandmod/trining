<?php
$n = array(4,5,6,2,3,2,8,2,3,4,45,4,5,54,2);
$sum = 0;
$i = 0;

while($i < count($n)){
	if ($n[$i] % 2 == 0){
	     $sum = $sum  + $n[$i];
          }
	$i++;
}
echo $sum;
?>