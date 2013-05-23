<?php
if(isset($_POST["num1"])){
//after submit
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

	//echo $ans;
}else{
//first open page
    $ans  = 0;
	$op   = 1;
	$num1 = 0;
	$num2 = 0;
}//end
?>
<HTML>
 <HEAD>
  <TITLE>-= Calculator =-</TITLE>
 </HEAD>
 <BODY>
  <FORM METHOD=POST ACTION="">
	<TABLE>
  <TR>
	<TD></TD>
	<TD>+<INPUT TYPE="radio" NAME="op" VALUE=1  
	     <?php if($op==1){ echo "checked"; } ?>  >
	    -<INPUT TYPE="radio" NAME="op" VALUE=2   
		 <?php if($op==2){ echo "checked"; } ?>  >
		x<INPUT TYPE="radio" NAME="op" VALUE=3  
		 <?php if($op==3){ echo "checked"; } ?>   >
		/<INPUT TYPE="radio" NAME="op" VALUE=4  
		 <?php if($op==4){ echo "checked"; } ?>   ></TD>
  </TR>
  <TR>
	<TD>num1</TD>
	<TD><INPUT TYPE="text" NAME="num1" 
	     value="<?php echo $num1;?>"></TD>
  </TR>
  <TR>
	<TD>num2</TD>
	<TD><INPUT TYPE="text" NAME="num2"  
	     value="<?php echo $num2;?>" ></TD>
  </TR>
   <TR>
	<TD>ans</TD>
    <TD><INPUT TYPE="text" NAME="ans"  
	     value="<?php echo $ans;?>"   ></TD>
  </TR>
    <TR>
	<TD></TD>
	<TD><INPUT TYPE="submit" VALUE="done"></TD>
  </TR>
  </TABLE>
  </FORM>
 </BODY>
</HTML>