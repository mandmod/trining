<?php
	include 'condb.php';
	$sql='select * from member';
	$rs=mysql_query($sql);

	$cnt = mysql_num_rows($rs);
	
	for($i=0;$i<$cnt;$i++){
		$arr=mysql_fetch_array($rs);
		echo $arr['mem_name'].' ' .$arr['mem_sname'];
		echo '<hr>';
	}
	
?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />