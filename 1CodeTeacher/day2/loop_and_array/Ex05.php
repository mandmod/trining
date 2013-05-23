<?php
$n = array(4,5,6,2);
$sum = 0;
$i = 0;	  

do {
	$sum += $n[$i];
	$i++;
}while($i < count($n)    );

echo $sum;
?>