<?php
function openMember(){
     $sql = "SELECT t1.id,t1.name, t1.surname, t1.sex, t1.age, t1.address,
	             t1.salary, t2.name AS department, t2.header
                 FROM member t1, department t2 
				 WHERE t1.dept = t2.id
				 order by id";
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
								<td>delete</td>
								<td>update</td>
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
			$dept = $arr['department'];

            $id = $arr['id'];

		    $tb .="<tr>
								<td>$no</td>
								<td>$name</td>
								<td>$surname</td>
								<td>$sex</td>
								<td>$age</td>
								<td>$address</td>
								<td>$salary</td>
								<td>$dept</td>
								<td><center><A HREF='?did=$id'   
								onclick='return confirm(\"ยืนยันการลบข้อมูล\")'          ><img src='b_drop.png' border=0></A></center></td>

								<td><A HREF='?uid=$id'><center><img src='b_edit.png'  border=0 ></center></A></td>

							</tr>";
		    }//endfor
	 $tb .= "</table>";
echo $tb;
}//end function
?>