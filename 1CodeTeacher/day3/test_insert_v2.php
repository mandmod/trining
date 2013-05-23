<?php
include("conDB.php");
if(  isset($_POST['txtname']) ){
//after submit
          $name = $_POST['txtname'];
          $sql = "insert into member      (name,surname,sex,age,address,salary,dept)  values ('$name','Terry','M','18','London','20000','1')";
          //echo $sql;
		  mysql_query($sql);
}else{
//first open page

}//end if
?>
<HTML>
 <HEAD>
  <TITLE> -= member =- </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </HEAD>
 <BODY>
       <FORM METHOD=POST ACTION="">
		<TABLE>
		<TR>
			<TD>name</TD>
			<TD><INPUT TYPE="text" NAME="txtname"></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT TYPE="submit" value="done"></TD>
		</TR>
		</TABLE>
       </FORM>
 </BODY>
</HTML>