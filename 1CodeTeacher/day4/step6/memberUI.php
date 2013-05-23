<?php
include("conDB.php");
include("utility.php");
include("myfunction.php");
if(  isset($_POST['txtname'])    &&   !isset($_GET['uid'])               ){
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
}else if(  isset($_GET['uid'])   &&    !isset($_POST['txtname'])       ){
		//before update
		$id   = $_GET['uid'];
		$sql = "   select * from member where id = '$id'     ";
		$rs   = mysql_query($sql);
		$arr  = mysql_fetch_array($rs);
		$name = $arr['name'];
        $surname = $arr['surname'];
		$sex = $arr['sex'];
		$age = $arr['age'];
		$address = $arr['address'];
		$salary = $arr['salary'];
		$dept = $arr['dept'];
		openMember();

}else if(   isset($_GET['uid'])   &&    isset($_POST['txtname'])      ){
         // update statement
          $name = $_POST['txtname'];
		  $surname = $_POST['txtsurname'];
		  $sex = $_POST['rdosex'];
		  $age = $_POST['txtage'];
		  $address = $_POST['txtaddress'];
		  $salary = $_POST['txtsalary'];
		  $dept = $_POST['lsbdept'];
		  $id = $_GET['uid'];
          $sql = "    update member set name='$name'  , 
		                                                    surname='$surname' ,
														    sex ='$sex'  ,
														    age ='$age' ,
															address='$address' ,
															salary ='$salary' , 
															dept='$dept'  
						  where id = '$id'    "; 
           if( mysql_query($sql) ){
		      msgbox("แก้ไขข้อมูลสมาชิกเรียบร้อยแล้ว");
		    }else{
			  msgbox("ไม่สามารถแก้ไขข้อมูล");
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
		$name = "";
        $surname =  "";
		$sex =  "M";
		$age =  "";
		$address =  "";
		$salary =  "";
		$dept =  "1";
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
           <TD><INPUT TYPE="text" NAME="txtname"  value="<?php  echo $name;?>"     ></TD>
		</TR>
		<TR>
			<TD>นามสกุล : </TD>
			<TD><INPUT TYPE="text" NAME="txtsurname"  value="<?php  echo $surname;?>"     ></TD>
		</TR>
        <TR>
			<TD>เพศ : </TD>
			<TD>ชาย<INPUT TYPE="radio" NAME="rdosex" VALUE="M"   
			        <?php  if($sex=='M'){ echo "checked";}   ?> >
			         หญิง<INPUT TYPE="radio" NAME="rdosex" VALUE="F"  
					 <?php  if($sex=='F'){ echo "checked";}   ?>></TD>
		</TR>
			<TR>
			<TD>อายุ : </TD>
			<TD><INPUT TYPE="text" NAME="txtage"    value="<?php  echo $age;?>"    ></TD>
		</TR>
		<TR>
			<TD>ที่อยู่ : </TD>
			<TD><INPUT TYPE="text" NAME="txtaddress"    value="<?php  echo $address;?>"></TD>
		</TR>
		<TR>
			<TD>เงินเดือน : </TD>
			<TD><INPUT TYPE="text" NAME="txtsalary"    value="<?php  echo $salary;?>"></TD>
		</TR>
		<TR>
			<TD>แผนก : </TD>
             <TD><SELECT NAME="lsbdept">
				<OPTION VALUE="1" <?php  if($dept=='1'){ echo "SELECTED";}   ?>>บัญชี
				<OPTION VALUE="2" <?php  if($dept=='2'){ echo "SELECTED";}   ?>>ขนส่ง
				<OPTION VALUE="3" <?php  if($dept=='3'){ echo "SELECTED";}   ?>>IT
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