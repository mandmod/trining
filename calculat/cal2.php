<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<form method="post" action="cal.php">
	<table>
	<tr>
		<td></td>
		<td>
		+ <input type="radio" name="redi" value="1"> 
		- <input type="radio" name="redi" value="2">
		* <input type="radio" name="redi" value="3">
		/ <input type="radio" name="redi" value="4">
		</td>
	</tr>
	<tr>
		<td>Num 1</td>
		<td><input type="text" name="num1"></td>
	</tr>
	<tr>
		<td>Num 2</td>
		<td><input type="text" name="num2"></td>
	</tr>
	<tr>
		<td>answer</td>
		<td><input type="text" name="answer"></td>
	</tr>	
		<tr>
		<td></td>
		<td><input type="submit"></td>
	</tr>
	</table>
</form>
</body>
</html>