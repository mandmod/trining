<?php
	$n = array(4,45,6,40,23,54,1,13,66);
	$i=0;
	$maxs=$n[$i];
	$mins=$n[$i];
	while ($i<count($n)){
			if ($n[$i]>$maxs){
				$maxs=$n[$i];
				$indexarray = $i+1;
			}
			if ($n[$i]<$mins){
				$mins=$n[$i];
				$indexarray2 = $i+1;
			}
		$i++;
	}
echo "max value is ".$maxs.' index at '.$indexarray.'<br>';
echo "min value is ".$mins.' index at '.$indexarray2.'<br>';

?>