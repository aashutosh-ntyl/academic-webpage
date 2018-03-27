<?php
session_start();
if( isset( $_SESSION['counter'] ) )
{
$_SESSION['counter'] += 1;
}
else
{
$_SESSION['counter'] = 1;
}
$msg =$_SESSION['counter'];
?>
<html>
<head>
<title>session</title>
</head>
<body>
<center>
<span style="font-weight:300;font-size:120;"><span style="color:green;font-weight:300;">You Visited This Page:</span><span style="color:black;"><?php echo ( $msg );?> </span></span>
<center>
</body>
</html>