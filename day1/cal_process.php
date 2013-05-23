<?php
$op   = $_POST["op"];   
$num1 = $_POST["num1"];  
$num2 = $_POST["num2"];  
if(is_numeric($num1)  && is_numeric($num2) ){
   // process....
	if($op==1){
	  $ans = $num1 + $num2;
	}else if($op==2){
	  $ans = $num1 - $num2;
	}else if($op==3){
	  $ans = $num1 * $num2;
	}else if($op==4 && $num2==0){
	  $ans = "Cannot divide by zero";
	}else if($op==4 && $num2!=0){
	  $ans = $num1 / $num2;
	}

}else{
   $ans = "pls enter number only";
}

echo $ans;
?>