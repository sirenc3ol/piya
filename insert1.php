<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "uni_department";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("การติดต่อผิดพลาด : " . $conn->connect_error);
	
} 
$conn->query("set names utf8");

$north_id = $_POST['north_id'];
$north_name = $_POST['north_name'];



$sql = "insert into northbkk_name values 
		('$n_id','$n_name')";
		
if($conn->query($sql) === TRUE) echo "บันทึกข้อมูลแล้ว..."; else echo "บันทึกข้อมูลไม่สำเร็จ ! " ,
header("location:insertform.php");

$conn->close();		
?>