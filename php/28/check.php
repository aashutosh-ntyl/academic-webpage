<!Doctype HTML>
<html>
<head>
<title>Result</title>
<head>
<body>
<center>

<?php table();?>

</body>
</html>
<?php
function table()
{

$con=mysql_connect("localhost","root","")or die("error");
mysql_select_db("user_detail");
$num=$_POST['username'];
$sql = "SELECT * FROM user_info where username='$num'";
$result = mysql_query($sql) ;
if($result==FALSE)
{
	die(mysql_error());
}
while($row = mysql_fetch_array($result))
{		
	$num=$_POST['password'];
	if($num==$row['password'])
		echo "<h1>WELCOME $_POST[username]</h1>";
}
mysql_close();
}
?>