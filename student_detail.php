<?php include"my_db.php";?>
 <?php
      $bstid = $_POST['bstid'];
	  $stemail= $_POST['stemail'];
  $record = mysqli_query($con,"SELECT * FROM register_student where id ='$bstid' and email ='$stemail'"); 
   $data = mysqli_fetch_array($record);
         
		 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Management System_II</title>
<link rel="stylesheet" href="sms_style.css" type="text/css">
</head>

<body>
<form method="post" action="student_detail.php" enctype="multipart/form-data" >
<div id="wraper">
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
  <table width="579" height="140" border="0" bgcolor="#FFCC66">
  <tr>
    <td height="54" colspan="3"><h2>STUDENT DETAILS</h2></td>
  </tr>
  <tr>
    <th height="27"><div align="left">STUDENT ID</div></th>
    <td height="27"><?php echo $data['id']; ?></td>
    <td width="193" rowspan="8"><?php echo"<img height='200' width='150' src='images/".$data['image']."'>";?></td>
  </tr>
  <tr>
    <th width="193"> <div align="left">FULL NAME</div></th>
    <td width="168"><?php echo $data['fname']; ?> <?php echo $data['mname']; ?> <?php echo $data['lname']; ?></td>
  </tr>
  <tr>
    <th><div align="left">ADDRESS</div></th>
    <td><?php echo $data['address']; ?></td>
  </tr>
  <tr>
    <th><div align="left">CONTACT</div></th>
    <td><?php echo $data['contact']; ?></td>
  </tr>
  <tr>
    <th><div align="left">BIRTH DATE</div></th>
    <td><?php echo $data['date']; ?></td>
  </tr>
  <tr>
    <th><div align="left">E-MAIL ADDRESS</div></th>
    <td><?php echo $data['email']; ?></td>
  </tr>
  <tr>
    <th><div align="left">DEGREE</div></th>
    <td><?php echo $data['degree'] ;?></td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
</table>
  <div align="center"><br>
  </div>
  <label for="textfield"></label>
  <div align="center">
    <input type="submit"  value="Back" class="submit" name="bdtail_back" formaction="studentLogin.php">
  </div>
     
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
<?php 
if(! $data) 

{
 echo'<script>alert("Student Id or E-mail is wronge !")</script>'; 
 }
?>