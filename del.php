<?php 
include"my_db.php";
$id = $_GET['id'];
$del = mysqli_query($con,"DELETE FROM `register_student` WHERE id = $id");
header("location:view_detail.php");

?>