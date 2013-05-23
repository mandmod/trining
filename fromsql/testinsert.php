
<?php
	include 'condb.php';
	include 'utility.php';
	if (isset($_POST['mem_name'])) {
		$sql = "INSERT INTO `dbtrain`.`member` (`mem_id`, `mem_name`, `mem_sname`, `mem_sex`, `mem_age`, `mem_add`, `mem_salary`, `mem_dept`) 
		VALUES (NULL, '$_POST[mem_name]', '$_POST[mem_sname]', '$_POST[mem_sex]', '$_POST[mem_age]', '$_POST[mem_add]', '$_POST[mem_salary]', '$_POST[mem_dept]')";
		if(mysql_query($sql)){
			msgbox('เพิ่มข้อมูลสมาชิกเรียบร้อยแล้ว');
		}else {
			msgbox('ไม่สามารถเพิ่มข้อมูลได้');
		}
		redirect();
	} else {

	}
?>
	<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>

 <body>
  <form method="post" action="">
	<table>
	<tr>
		<td>ชื่อ</td>
		<td><input type="text" name="mem_name"></td>
	</tr>
	<tr>
		<td>สกุล</td>
		<td><input type="text" name="mem_sname"></td>
	</tr>
		<tr>
		<td>เพศ</td>
		<td>
		<input type="radio" name="mem_sex" value="M"> ชาย 
		<input type="radio" name="mem_sex" value="F"> หญิง 
		</td>
	</tr>
		<tr>
		<td>อายุ</td>
		<td><input type="text" name="mem_age"></td>
	</tr>
		<tr>
		<td>ที่อยู่</td>
		<td><input type="text" name="mem_add"></td>
	</tr>
		<tr>
		<td>เงินเดือน</td>
		<td><input type="text" name="mem_salary"></td>
	</tr>
	<tr>
		<td>แผนก</td>
		<td>
		<select name="mem_dept">
			<option value="1" selected>บัญชี
			<option value="2">ขนส่ง
			<option value="3">IT
		</select>
		</td>
	</tr>
		<tr>
		<td></td>
		<td><input type="submit" value = "เพิ่มข้อมูล"></td>
	</tr>
		
	
	</table>
  </form>
 </body>
</html>
	