<?php 
include"my_db.php";
$id = $_GET['id'];

if(isset($_POST['upload']))
{
	$target = "images/".basename($_FILES['image']['name']);
//Get all the submitted data from form
	$image = $_FILES['image']['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$date = $_POST['date'];
	$email = $_POST['email'];
	$degree = $_POST['degree'];
	 

$edit = mysql_query("UPDATE `register_student` SET fname`='$fname',`mname`='$mname',`lname`='$lname',`address`='$address',`contact`='$contact',`date`='$date',`email`='$email',`degree`='$degree',`image`='$image' WHERE id = $id");



mysql_query($edit); //Store the submitted data into the database table:images
// Now let us move the uploaded image into the folder:images
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
	  {
		 /* echo'<script>alert("Informarion uploaded successfully !")</script>'; */
		  header("location:student_detail.php");
	  }
	  else { 		
 echo'<script>alert("There was a problem uploading informarion !")</script>'; 
	     }

}

?>