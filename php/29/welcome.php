<!Doctype HTML>
<html>
<head>
<title>Result</title>
<head>
<body>
<center>
<h1>INFORMATION</h1>
<table border=6>
<tr>
<th>Department No.</th>
<th>Name</th>
<th>Designation</th>
<th>Email</th>
<th>Mobile</th>
</tr>
<?php table();?>
</table>
</center>
</body>
</html>
<?php
function table(){

$con=mysql_connect("localhost","root","")or die("error");
mysql_select_db("employee");
$num=$_POST['xyz'];
$sql = "SELECT * FROM emp_info where dno=$num";
$result = mysql_query($sql) ;
if($result==FALSE)
{
	die(mysql_error());
}
while($row = mysql_fetch_array($result))
{		
	echo "<tr>
	<td>$row[dno]</td>
	<td>$row[emp_name]</td>
	<td>$row[mp_designation]</td>
	<td>$row[email]</td>
	<td>$row[number]</td></tr>";
}
mysql_close();
}
?>