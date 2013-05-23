<?php
if (!(is_numeric($_POST['num1']) && is_numeric($_POST['num2']))) {
	echo 'กรอก ข้อมูลเป็นตัวเลขเท่านั้น';
	break;
} elseif ($_POST['num2'] == 0) {
	echo 'ตัวหาร ไม่สามารถที่จะเท่ากับ 0 กรุณากลับไปกรอกข้อมูลใหม่';
	break;
}

switch ($_POST['redi']) {
case 1:
	echo $_POST['num1'].' +'.$_POST['num2'].'= ';
	echo $_POST['num1'] + $_POST['num2'];
	break;
case 2:
	echo $_POST['num1'].' - '.$_POST['num2'].'= ';
	echo $_POST['num1'] - $_POST['num2'];
	break;
case 3:
	echo $_POST['num1'].' * '.$_POST['num2'].'= ';
	echo $_POST['num1'] * $_POST['num2'];
	break;
case 4:
	echo $_POST['num1'].' / '.$_POST['num2'].'= ';
	echo $_POST['num1'] / $_POST['num2'];
	break;
}
?>