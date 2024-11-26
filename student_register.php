<?php
include"my_db.php";
$msg = "";
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
	 
	mysqli_query($con,"INSERT INTO register_student(fname, mname, lname, address, contact, date,email, degree,image) VALUES ('$fname','$mname','$lname','$address','$contact','$date','$email','$degree','$image')"); //Store the submitted data into the database table:images
// Now let us move the uploaded image into the folder:images
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
	  {
		  echo'<script>alert("Informarion uploaded successfully !")</script>'; 
	  }
	  else { 		
 echo'<script>alert("There was a problem uploading informarion !")</script>'; 
	     }

}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Management System_II</title>
<link rel="stylesheet" href="sms_style.css" type="text/css">
</head>

<body>
<form method="post" action="student_register.php" enctype="multipart/form-data" >
<div id="wraper">
		<div id="header">
         </div>
         
         <div id="container">
         			<div id="left-nav">
                    <ul>
                       <li><a href="index.php">Home</a></li>
                       <li><a href="student_register.php">Register Student</a></li>
                       <li><a href="view_detail.php">View Student Detail</a></li>
                       <li><a href="studentLogin.php">Student Login</a></li>
                       <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div id="news"> <h3 align="center">LATEST NEWS</h3><br><br>
                    <marquee direction="up">* GST has launched today</marquee></div>
                    </div>
                              
                    <div id="right-sec" align="center">
 <table width="533" border="0">
  <tr>
    <td height="45" colspan="3" bgcolor="#7d645d"> <div align="center"><h2><strong> Student Registration</strong></h2></div></td>
  </tr>
  <tr>
    <td width="25">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td width="219" style="color:#C00"><strong>FIRST NAME</strong></td>
    <td width="267"><input type="text" name="fname" size="30" placeholder="Enter First name"></td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td style="color:#C00"><strong>MIDDLE NAME</strong></td>
    <td><input type="text" name="mname" size="30" placeholder="Enter middle name"></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td style="color:#C00"><strong>LAST NAME</strong></td>
    <td><input type="text" name="lname" size="30" placeholder="Enter Last name"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top"><span style="color:#C00"><strong>ADDRESS</strong></span></td>
    <td><textarea name="address" id="textarea"cols="32" rows="3" placeholder="Enter your address" ></textarea></td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td><strong>CONTACT</strong></td>
    <td><input type="number" name="contact" size="30" placeholder="Enter your contact no" required></td>
  </tr>
  <tr>
    <td height="33">&nbsp;</td>
    <td><strong>DATE OF BIRTH</strong></td>
    <td><div align="left">
      <input type="date" name="date" size="30" placeholder="Enter your ID">
    </div></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td><strong>E-MAIL</strong></td>
    <td><input type="email" name="email" size="30" placeholder="Enter your e-mail" required></td>
  </tr>
  <tr>
    <td height="31">&nbsp;</td>
    <td><strong>DEGREE PROGRAM</strong></td>
    <td><select name="degree" id="select">
      <option name="degree"value="Select">--Select--</option>
      <option value="BA-Part I">BA-Part I</option>
      <option value="BA-Part II">BA-Part II</option>
      <option value="BA-Part III">BA-Part III</option>
      <option value="BSc(Bio)-Part I">BSc(Bio)-Part I</option>
      <option value="BSc(Bio)-Part II">BSc(Bio)-Part II</option>
      <option value="BSc(Bio)-Part III">BSc(Bio)-Part III</option>
      <option value="BSc(maths)-Part I">BSc(maths)-Part I</option>
      <option value="BSc(maths)-Part II">BSc(maths)-Part II</option>
      <option value="BSc(maths)-Part III">BSc(maths)-Part III</option>
      <option value="BSc(Computer Science)-Part I">BSc(Computer Science)-Part I</option>
      <option value="BSc(Computer Science)-Part II">BSc(Computer Science)-Part II</option>
      <option value="BSc(Computer Science)-Part III">BSc(Computer Science)-Part III</option>
      <option value="PGDCA">PGDCA</option>
      <option value="BCA-Part I">BCA-Part I</option>
      <option value="BCA-Part II">BCA-Part II</option>
      <option value="BCA-Part III">BCA-Part III</option>
    </select></td>
  </tr>
  <tr>
    <td height="31">&nbsp;</td>
    <td><strong>UPLOAD STUDENT IMAGE</strong></td>
    <td><input type="file" name="image"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2"><div align="center">
      <input type="submit" name="upload" value="SUBMIT" class="submit">
    </div></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

                    </div>
         </div>
         
         <div id="footer">
         <p align="center">&nbsp; </p>
         <p align="center">&nbsp;</p>
         <p align="center" >Umesh Banjare &#169; 2017 | All Rights Reserved &nbsp;</p> 
      
         </div>
</div>
</form>
</body>
</html>
