<?php
include"my_db.php";
//$msg = "";
$id = $_GET['id'];
$m = mysqli_query($con,"SELECT * FROM register_student where id ='$id'"); 
$check = mysqli_fetch_array($m);
if(isset($_POST['update']))
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
	
	$edit = mysqli_query($con,"UPDATE register_student SET fname='$fname',mname='$mname',lname='$lname',address='$address',contact='$contact',date='$date',email='$email',degree='$degree',image='$image' WHERE id = '$id' ");

	 
	mysqli_query($edit); //Store the submitted data into the database table:images
// Now let us move the uploaded image into the folder:images
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
	  {
		  /*echo'<script>alert("Informarion uploaded successfully !")</script>'; */
          header("location:view_detail.php");

	  }
	  else { 		
 echo'<script>alert("There was a problem uploading informarion !")</script>'; 
	     }
		 
 echo "Data Updated";
}

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Management System_II</title>
<link rel="stylesheet" href="sms_style.css" type="text/css">
</head>

<body>
<form method="post" enctype="multipart/form-data" ><div id="wraper">
		<div id="header">
         </div>
         <div id="menubar"></div>
         
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
<table width="542" height="463" border="0" align="center" bgcolor="#FFCC66">
    <tr>
      <td height="64" colspan="4"><div align="center">
        <h2><strong>Update Student Details </strong></h2></div> <hr></td>
      </tr>
    <tr>
      <td width="226" height="33"><div align="left">
        <p style="color:#C00"> <strong>&nbsp;&nbsp;FIRST NAME :</strong></p></div></td>
      <td width="306" colspan="3"><input type="text" name="fname" size="30" value="<?php echo $check['fname']; ?>" placeholder="Enter First name"></td>
      </tr>
    <tr>
      <td height="30"><p align="left" style="color:#C00">&nbsp;<strong>&nbsp;MIDDLE NAME :</strong></p></td>
      <td colspan="3"><input type="text" name="mname" value="<?php echo $check['mname']; ?>"size="30" placeholder="Enter middle name">      </td>
      </tr>
    <tr>
      <td height="29"><div align="left">
        <p style="color:#C00"> <strong>&nbsp;&nbsp;LAST NAME :</strong></p>
      </div></td>
      <td colspan="3"><input type="text" name="lname" value="<?php echo $check['lname']; ?>" size="30" placeholder="Enter Last name"></td>
      </tr>
    <tr>
      <td height="37"><p align="left" style="color:#C00">&nbsp;<strong>&nbsp;ADDRESS :</strong></p></td>
      <td colspan="3"><textarea name="address"  value="<?php echo $check['address']; ?>" id="textarea"cols="32" rows="3"  placeholder="Enter your address" ></textarea></td>
      </tr>
    <tr>
      <td height="31"><p align="left" style="color:#C00">&nbsp;<strong>&nbsp;CONTACT :</strong></p></td>
      <td colspan="3"><div><input type="number" name="contact" size="30"  value="<?php echo $check['contact']; ?>" placeholder="Enter your contact no" required></div></td>
      </tr>
    <tr>
      <td height="29"><div align="left">
        <p style="color:#C00"> <strong>&nbsp;&nbsp;DATE OF BIRTH :</strong></p>
      </div></td>
      <td colspan="2"><input type="date" name="date"  value="<?php echo $check['date']; ?>"size="30" placeholder="Enter your ID"></td>
      </tr>
    <tr>
      <td height="29"><p align="left" style="color:#C00">&nbsp;<strong>&nbsp;E-MAIL :</strong></p></td>
      <td colspan="3"><input type="email" name="email"  value="<?php echo $check['email']; ?>" size="30" placeholder="Enter your e-mail" required></td>
      </tr>
    <tr>
      <td height="31"><p align="left" style="color:#C00">&nbsp;<strong>&nbsp;DEGREE PROGRAM :</strong></p></td>
      <td colspan="3">
        <select name="degree"  value="<?php echo $check['degree']; ?>" id="select">
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
      <<td height="33"><p align="left" style="color:#C00">&nbsp;<strong>&nbsp;UPLOAD STUDENT IMAGE :</strong></p></td>
      <td colspan="3"><div><input type="file" name="image"></div></td>
      </tr>
    <tr>
      <td height="37">&nbsp;</td>
      <td colspan="3">&nbsp;<br><input type="submit" name="update" class="submit">&nbsp; <input type="submit"  value="Back" class="submit" name="bdtail_back" formaction="view_detail.php"></td>
      </tr>
    
    </table>


  <div align="center"><br>
  </div>
  <label for="textfield"></label>
  <div align="center"></div>
     
  </div>
  <br>
    </form>
</body>
                    </div>
         </div>
         
   <div id="footer"><br><br>
        <p align="center" >Umesh Banjare &#169; 2017 | All Rights Reserved &nbsp;</p> 
        
      
         </div>
</div>
</form>
</body>
</html>
