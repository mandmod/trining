<?php
	$n=array(4,5,6,2,3,4,5);
	$sum=0;
	$i=0;
	while ($i<7){
		if ($n[$i] % 2 == 0){
			$sum=$sum+$n[$i];
		}
		$i++;
	}
	echo $sum;
?>