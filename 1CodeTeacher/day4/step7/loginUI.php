<?php
session_start();
include("utility.php");
if(  isset($_POST['txtusername'])  ){
// after submit
	   $username = $_POST['txtusername'];
	   $password  = $_POST['txtpassword'];
	   if($username=='admin'  && $password=='1234' ){
			 $_SESSION['member'] = "admin";
			 redirect("memberUI.php");
	   }else{
			 msgbox("login fail");
	   }//end if
}else{
// first open page

}//end if
?>
<HTML>
 <HEAD>
  <TITLE> Log In </TITLE>
 </HEAD>
 <BODY>
     <FORM METHOD=POST ACTION="">
		<TABLE>
		<TR>
			<TD>username</TD>
			<TD><INPUT TYPE="text" NAME="txtusername"></TD>
		</TR>
		<TR>
			<TD>password</TD>
			<TD><INPUT TYPE="password" NAME="txtpassword"></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT TYPE="submit" value="login"></TD>
		</TR>
		</TABLE>
     </FORM>
 </BODY>
</HTML>