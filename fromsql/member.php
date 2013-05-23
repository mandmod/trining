<?php 
//if($_SESSION['logged_in'] != 1) header("Location: index.php");
//echo $_SESSION['logged_in'];
include 'condb.php';
include 'utility.php';

?>

<html>
 <head>
  <title> ---= ระบบสมาชิก =--- </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>

 <body >
<h1>ระบบสมาชิก</h1>
<div>[ <a href="member.php?action=add">เพิ่มสมาชิค</a> ]</div>
  <table border="1" cellspacing="0" cellpadding="0" >
  <tr>
	<td>No.</td>
	<td>Name</td>
	<td>Sername</td>
	<td>Age</td>
	<td>Address</td>
	<td>Sex</td>
	<td>Salary</td>
	<td>department</td>
	<td>Delte</td>
	<td>Edit</td>
  </tr>
  <?php 
  	//$sql='select * from member order by mem_id';
  	$sql="SELECT t1.`mem_id`,t1.`mem_name`,t1.`mem_sname`,t1.`mem_sex`,t1.`mem_age`,t1.`mem_add`,t1.`mem_salary`,t1.`mem_dept`,t2.dep_id,t2.dep_name,t2.header FROM member t1, department t2 WHERE t1.mem_dept=t2.dep_id order by  mem_id desc";
	$rs=mysql_query($sql);
	$cnt = mysql_num_rows($rs);
	$i=0;
  	while ($i<$cnt){
  				$arr=mysql_fetch_array($rs);
		//echo $arr['mem_name'].' ' .$arr['mem_sname'];
		//echo '<hr>';
  		$i++;

  ?>
  <tr bgcolor="<?php if ($arr['mem_id']==$_GET['id'] and $_GET['action'] = 'edit'){echo 'bgcolor=#ccff99'; }?>">
	<td><?php echo $arr['mem_id'];?></td>
	<td><?php echo $arr['mem_name'];?></td>
	<td><?php echo $arr['mem_sname'];?></td>
	<td><?php echo $arr['mem_age'];?></td>
	<td><?php echo $arr['mem_add'];?></td>
	<td><?php echo $arr['mem_sex'];?></td>
	<td><?php echo $arr['mem_salary'];?></td>
	<td><?php echo $arr['dep_name'];?></td>
	<td><a href="member.php?action=del&id=<?php echo $arr['mem_id'];?>" onClick="return confirm('คุณต้องการลบข้อมูลใช้หรือไม่ ?');"><center><img src='b_drop.png' border = 0></center></a></td>
	<td><a href="member.php?action=edit&id=<?php echo $arr['mem_id'];?>"><center><img src='b_edit.png' border = 0></center></a></td>
	
	
  </tr>

  <?php 
  }
  ?>
    </table>
  <?php 
  if ($_GET['action']=='add'){
  ?>
  <form method="post" action="member.php?action=saveadd">
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
  
  
  <?php 
  }elseif ($_GET['action']=='saveadd'){
  	$sql = "INSERT INTO `dbtrain`.`member` (`mem_id`, `mem_name`, `mem_sname`, `mem_sex`, `mem_age`, `mem_add`, `mem_salary`, `mem_dept`) 
		VALUES (NULL, '$_POST[mem_name]', '$_POST[mem_sname]', '$_POST[mem_sex]', '$_POST[mem_age]', '$_POST[mem_add]', '$_POST[mem_salary]', '$_POST[mem_dept]')";
		if(mysql_query($sql)){
			msgbox('เพิ่มข้อมูลสมาชิกเรียบร้อยแล้ว');
		}else {
			msgbox('ไม่สามารถเพิ่มข้อมูลได้');
		}
		redirect();
  }elseif ($_GET['action']=='edit'){
  	 $sql='select * from member where mem_id = '.$_GET['id'];
	$rs=mysql_query($sql);
	$arr=mysql_fetch_array($rs);
  ?>
  <form method="post" action="member.php?action=saveedit&id=<?php echo $arr['mem_id']; ?>">
	<table>
	<tr>
		<td>ชื่อ</td>
		<td><input type="text" name="mem_name" value ="<?php echo $arr['mem_name'];?>"></td>
	</tr>
	<tr>
		<td>สกุล</td>
		<td><input type="text" name="mem_sname" value ="<?php echo $arr['mem_sname'];?>"></td>
	</tr>
		<tr>
		<td>เพศ</td>
		<td>
		<input type="radio" name="mem_sex" value="M" <?php if ($arr['mem_sex']=='M'){ echo 'checked';}?>> ชาย 
		<input type="radio" name="mem_sex" value="F" <?php if ($arr['mem_sex']=='F'){ echo 'checked';}?>> หญิง 
		</td>
	</tr>
		<tr>
		<td>อายุ</td>
		<td><input type="text" name="mem_age" value ="<?php echo $arr['mem_age'];?>"></td>
	</tr>
		<tr>
		<td>ที่อยู่</td>
		<td><input type="text" name="mem_add" value ="<?php echo $arr['mem_add'];?>"></td>
	</tr>
		<tr>
		<td>เงินเดือน</td>
		<td><input type="text" name="mem_salary" value ="<?php echo $arr['mem_salary'];?>"></td>
	</tr>
	<tr>
		<td>แผนก</td>
		<td>
		<select name="mem_dept">
			<option value="1" <?php if ($arr['mem_dept']=='1'){ echo 'selected';}?>>บัญชี
			<option value="2" <?php if ($arr['mem_dept']=='2'){ echo 'selected';}?>>ขนส่ง
			<option value="3" <?php if ($arr['mem_dept']=='3'){ echo 'selected';}?>>IT
		</select>
		</td>
	</tr>
		<tr>
		<td></td>
		<td><input type="submit" value = "แก้ไขข้อมูล"></td>
	</tr>
		
	
	</table>
  </form>
  <?php   	
  }elseif ($_GET['action']=='saveedit'){
  	$sql="UPDATE member SET 
  	mem_name = '$_POST[mem_name]', 
  	mem_sname = '$_POST[mem_sname]', 
  	mem_sex = '$_POST[mem_sex]', 
  	mem_age = '$_POST[mem_age]', 
  	mem_add = '$_POST[mem_add]', 
  	mem_salary = '$_POST[mem_salary]', 
  	mem_dept = '$_POST[mem_dept]' 
  	WHERE mem_id = '$_GET[id]' ";
  //	echo $sql;
  
 			if(mysql_query($sql)){
			msgbox('บันทึกการแก้ไขเรียบร้อยแล้ว');
		}else {
			msgbox('ไม่สามารถบันทึกการแก้ไขได้');
		}
		redirect();
  	
  	//UPDATE `dbtrain`.`member` SET `mem_name` = 'ดำจัง', `mem_sname` = 'ดีใจ' WHERE `member`.`mem_id` = 20;
  }elseif ($_GET['action']=='del'){
  	  	$sql="DELETE FROM `member` WHERE `mem_id` = '$_GET[id]'";
  			if(mysql_query($sql)){
			msgbox('ลบข้อมูลเรียบร้อยแล้ว');
		}else {
			msgbox('ไม่สามารถลบข้อมูลได้');
		}
		redirect();
  	

  }
  ?>


 </body>
</html>
