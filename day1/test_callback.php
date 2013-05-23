<?php
if(  isset($_POST["txtname"])  ){
//after submit
    echo $_POST["txtname"];
}else{
//first open page

}
?>
<FORM METHOD=POST ACTION="">
	<INPUT TYPE="text" NAME="txtname">
	<INPUT TYPE="submit" value="done">
</FORM>