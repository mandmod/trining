<?php
function openMember(){
     $sql = "select * from member";
     $rs   = mysql_query($sql);
     $cnt = mysql_num_rows($rs);
     $tb = "<table border=1>";
	  $tb .="<tr>
								<td>no</td>
								<td>name</td>
								<td>surname</td>
								<td>sex</td>
								<td>age</td>
								<td>address</td>
								<td>salary</td>
								<td>dept</td>
							</tr>";
	 $no=0;
		for($i=0;$i<$cnt;$i++){
			$arr = mysql_fetch_array($rs);
			$no++;
			$name = $arr['name'];
		    $surname = $arr['surname'];
		    $sex = $arr['sex'];
			$age = $arr['age'];
			$address = $arr['address'];
			$salary = $arr['salary'];
			$dept = $arr['dept'];
		    $tb .="<tr>
								<td>$no</td>
								<td>$name</td>
								<td>$surname</td>
								<td>$sex</td>
								<td>$age</td>
								<td>$address</td>
								<td>$salary</td>
								<td>$dept</td>
							</tr>";
		    }//endfor
	 $tb .= "</table>";
echo $tb;
}//end function
?>