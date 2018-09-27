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
$sql="delete from course_tb";
$strSQL .="WHERE C_id = '".$_GET["C_id"]."' ";
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
