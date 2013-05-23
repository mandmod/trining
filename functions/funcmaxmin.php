<?php
function funcmaxmin($n){
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
	$outs=array($maxs,$indexarray,$mins,$indexarray2);
	return $outs;

}

?>