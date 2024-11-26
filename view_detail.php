<?php include"my_db.php";?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Management System_II</title>
<link rel="stylesheet" href="sms_style.css" type="text/css">
</head>

<body>
<form method="post" action="student_detail_by_id.php" enctype="multipart/form-data" >
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
                              
     <div id="right-sec">
   <table height="140" border="1" bgcolor="#FFCC66" align="center">
  <tr class="lgntitle">
    <td  height="66" colspan="11"><div align="center">
      <h2>Student Details</h2></div></td>
      </tr>
  <tr>    
    <th width="494">STUDENT ID</th>
    <th width="584">FIRST NAME</th> 
    <th width="584">LAST NAME</th>
    <th width="584">ADDRESS</th>
    <th width="584">CONTACT</th>
    <th width="584">E-MAIL ADDRESS</th>
    <th width="584">UPDATE</th>
    <th width="584">DELETE</th>
    
  </tr>
  <?php
     // $id = $_GET['id'];
  $record = mysqli_query($con,"SELECT * FROM register_student"); 
   while($data = mysqli_fetch_array($record))
        {  
		 ?>
        
    <tr>
        <td><?php echo $data['id']; ?></td>    
        <td><?php echo $data['fname']; ?></td>       
        <td><?php echo $data['lname']; ?></td>
		<td><?php echo $data['address']; ?></td>
        <td><?php echo $data['contact']; ?></td>
		<td><?php echo $data['email']; ?></td>
        <td><a href="update_student.php?id=<?php echo $data['id'] ; ?>"><span><img src="images/edit.png" height="25px" width="20px"></span></a></td>
        <td><a href="del.php?id=<?php echo $data['id'] ; ?>"><span><img src="images/delete1600.png" height="30px" width="30px"></span></a></td>
     </tr>
 <?php 
		}
		?>
 </table><br><br><br>
<div id="fetch" align="center"><label for="textfield">ENTER ID FOR STUDENT DETAIL:</label>
 <input type="text" name="bstid">
 <input type="submit"  value="Get Student Detail" class="submit"  name="bdetail_btn" formaction="student_detail_by_id.php">
 <input type="submit"  value="Back" class="submit" name="bdtail_back" formaction="student_register.php">

  </div>



<div id="login" align="center" >
   <br>
   <br>

  <br><br>
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
