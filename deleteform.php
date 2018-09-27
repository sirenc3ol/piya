<html>
<head>
		<title>คณะและสาขาในมหาวิทยาลัยทั้ง3แห่ง</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<script src="jquery/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style>
body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}
.panel{
width: intrinsic; 
width: -moz-max-content; 
width: -webkit-max-content;
}
</style>
<title>คณะและสาขาในมหาวิทยาลัยทั้ง3แห่ง</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("Uni_department");
$strSQL = "SELECT * FROM course_name";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<div class="panel panel-primary">
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ลำดับคณะ </div></th>
    <th width="98"> <div align="center">ชื่อคณะ </div></th>
    <th width="30"> <div align="center">ลบข้อมูล</div></th>
  </tr>
 </div>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["Depart_id"];?></div></td>
    <td><?php echo $objResult["Depart_Name"];?></td>
    <td align="center"><a href="deletecourse.php?Depart_id=<?php echo $objResult["Depart_id"];?>">
    	ลบข้อมูลคณะ
</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>