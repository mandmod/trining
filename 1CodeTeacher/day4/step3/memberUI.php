<?php
include("conDB.php");
include("utility.php");
include("myfunction.php");
if(  isset($_POST['txtname']) ){
//after submit
          $name = $_POST['txtname'];
		  $surname = $_POST['txtsurname'];
		  $sex = $_POST['rdosex'];
		  $age = $_POST['txtage'];
		  $address = $_POST['txtaddress'];
		  $salary = $_POST['txtsalary'];
		  $dept = $_POST['lsbdept'];
   
          $sql = "insert into member      (name,surname,sex,age,address,salary,dept)  values ('$name','$surname','$sex','$age','$address','$salary','$dept ')";
          //echo $sql;
		  if( mysql_query($sql) ){
		      msgbox("เพิ่มข้อมูลสมาชิกเรียบร้อยแล้ว");
		  }else{
			  msgbox("ไม่สามารถเพิ่มข้อมูล");
		  }
		  redirect();
}else if(  isset($_GET['did'])    ){
		  // delete 
		  $id = $_GET['did'];
		  $sql  =  "   delete from member where id ='$id'     ";
		      if( mysql_query($sql) ){
				   msgbox("ลบข้อมูลสมาชิกเรียบร้อยแล้ว");
				  }else{
				   msgbox("ไม่สามารถลบข้อมูล");
		       }
		  redirect();
}else{
//first open page
         openMember();
}//end if
?>
<HTML>
 <HEAD>
  <TITLE> -= ระบบสมาชิก =- </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </HEAD>
 <BODY>
       <FORM METHOD=POST ACTION="">
		<TABLE>
		<TR>
			<TD>ชื่อ : </TD>
			<TD><INPUT TYPE="text" NAME="txtname"></TD>
		</TR>
		<TR>
			<TD>นามสกุล : </TD>
			<TD><INPUT TYPE="text" NAME="txtsurname"></TD>
		</TR>
		<TR>
			<TD>เพศ : </TD>
			<TD>ชาย<INPUT TYPE="radio" NAME="rdosex" VALUE="M"   checked >
			         หญิง<INPUT TYPE="radio" NAME="rdosex" VALUE="F"></TD>
		</TR>
			<TR>
			<TD>อายุ : </TD>
			<TD><INPUT TYPE="text" NAME="txtage"></TD>
		</TR>
		<TR>
			<TD>ที่อยู่ : </TD>
			<TD><INPUT TYPE="text" NAME="txtaddress"></TD>
		</TR>
		<TR>
			<TD>เงินเดือน : </TD>
			<TD><INPUT TYPE="text" NAME="txtsalary"></TD>
		</TR>
		<TR>
			<TD>แผนก : </TD>
			<TD><SELECT NAME="lsbdept">
				<OPTION VALUE="1" SELECTED>บัญชี
				<OPTION VALUE="2">ขนส่ง
				<OPTION VALUE="3">IT
			</SELECT></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT TYPE="submit" value="done"></TD>
		</TR>
		</TABLE>
       </FORM>
 </BODY>
</HTML>