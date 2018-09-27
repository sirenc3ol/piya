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
$sql="delete from course_name";
$strSQL .="WHERE Depart_id = '".$_GET["Depart_id"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "Record Deleted.";
}
else
{
	echo "Error Delete [".$strSQL."]";
}
mysql_close($objConnect);


$res=$conn->exec($sql);
if($res==true){
	header("location:deleteform.php");
} 
?>
