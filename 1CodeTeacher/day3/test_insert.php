<?php
include("conDB.php");
$sql = "insert into member      (name,surname,sex,age,address,salary,dept)  values ('ประเสิรฐ','Terry','M','18','London','20000','1')";
//echo $sql;
mysql_query($sql);
?>
<meta http-equiv="Content-Type"
    content="text/html; charset=utf-8" />