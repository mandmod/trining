<?php
session_start();
$username = $_POST['uname'];  

$password = $_POST['pwd'];  



if($username == 'admin' && $password == '1234')
{
 //ถ้าถูกต้อง

 $_SESSION['logged_in'] = 1;
 //echo $_SESSION['logged_in'];
  header("Location: member.php");
}
else
{
	 echo 'ผิดนะครับ';
//ถ้าไม่ถูกต้องให้กลับไปหน้าแรก
 header("Location: index.php");
}
?>