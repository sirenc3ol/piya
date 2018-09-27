<!DOCTYPE html>
<html>
<head>
	<title>BkkUniversity</title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>
<?php
include("connection.php");
$sql="insert into course_tb(C_id,C_name)
					value(
						'".$_POST['C_id']."',
						'".$_POST['C_name']."'
						)";

$res=$conn->exec($sql);
if($res==true){
	header("location:index.php");
} ?>
