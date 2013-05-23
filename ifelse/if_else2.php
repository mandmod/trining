<?php
if (isset($_POST['num1']) and isset($_POST['num2'])) {
	if (!(is_numeric($_POST['num1']) && is_numeric($_POST['num2']))) {
		echo 'กรอก ข้อมูลเป็นตัวเลขเท่านั้น';
		break;
	} elseif ($_POST['num2'] == 0) {
		echo 'ตัวหาร ไม่สามารถที่จะเท่ากับ 0 กรุณากลับไปกรอกข้อมูลใหม่';
		break;
	}

	switch ($_POST['redi']) {
	case 1:
		$sum1= $_POST['num1'] + $_POST['num2'];
		break;
	case 2:
		$sum1= $_POST['num1'] - $_POST['num2'];
		break;
	case 3:
		$sum1= $_POST['num1'] * $_POST['num2'];
		break;
	case 4:
		$sum1= $_POST['num1'] / $_POST['num2'];
		break;
	}

}

?>
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
 <form method="post" action="">
	<table>
	<tr>
		<td></td>
		<?php //if ($_POST['redi'] == 1){echo'checked="checked"' ?>
		<td>
		+ <input type="radio" name="redi" value = "1"  <?php  if ($_POST['redi'] ==1){echo 'checked'; } ?>>
		- <input type="radio" name="redi" value = "2" <?php  if ($_POST['redi'] ==2){echo 'checked'; } ?>>
		* <input type="radio" name="redi" value = "3" <?php  if ($_POST['redi'] ==3){echo 'checked'; } ?>>
		/ <input type="radio" name="redi" value = "4" <?php  if ($_POST['redi'] ==4){echo 'checked'; } ?>>
		</td>
	</tr>
	<tr>
		<td>Num1</td>
		<td><input type="text" name="num1" value = "<?php echo $_POST['num1'];?>" ></td>
	</tr>
	<tr>
		<td>Num2</td>
		<td><input type="text" name="num2" value = "<?php echo $_POST['num2'];?>"></td>
	</tr>
	<tr>
		<td>Answer</td>
		<td><input type="text" name="answer" value = "<?php echo $sum1;?>" disabled="disabled"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"></td>
	</tr>
	</table>
 </form>
  
 </body>
</html>
