
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Management System_II</title>
<link rel="stylesheet" href="sms_style.css" type="text/css">
</head>

<body>
<form method="post" action="index.php" enctype="multipart/form-data" >
<div id="wraper">
		<div id="header">
         </div>
         
         <div id="container">
         			<div id="left-nav">
                    <ul>
                       <li><a href="#.php">Home</a></li>
                       <li><a href="#.php">Register Student</a></li>
                       <li><a href="#.php">View Student Detail</a></li>
                       <li><a href="#.php">Student Login</a></li>
                       <li><a href="#.php">Contact</a></li>
                    </ul>
                    <div id="news"> <h3 align="center">LATEST NEWS</h3><br><br>
                    <marquee direction="up">* GST has launched today</marquee></div>
                    </div>
                              
                    <div id="right-sec">
                    

<div id="login" align="center" >
   <br>
   <br>
<table width="477" border="0" bgcolor="#FFCC66" align="center">
    <tr class="lgntitle">
      <td height="52" colspan="3" valign="middle" bgcolor="#7d645d"><div align="left">
       <h2><strong>&nbsp;&nbsp;Login</strong></h2></div></td>
      </tr>
    <tr>
      <td height="56" colspan="3" valign="middle"><div align="center"><br>
        <span><img src="images/temporaryForOutput.png" height="100" width="100"></span></div></td>
    </tr>
    <tr>
      <td width="76"><p align="left" style="color:#C00">&nbsp;</p></td>
      <td width="207"><p align="left" style="color: #C00; font-size: 16px;"><strong>User Name</strong></p>
        <p align="left">
          <input name="username" type="text" required id="username"  placeholder="User name" size="30">
        </p></td>
      <td width="169" rowspan="2" align="center"><div align="left" ><img src="images/log.JPG" a align="top" height="80" width="100"></div></td>
      </tr>
    <tr align="left" valign="top">
      <td><div align="left"></div></td>
      <td><div align="left">
        <p style="color:#C00">&nbsp;</p>
        <p style="color:#C00"><strong style="font-size: 16px">Password</strong></p>
      </div>
        <div align="left"></div>
        <p align="left">
          <input name="password" type="password" required id="password"  placeholder="*********" size="30">
        </p>
        <p align="left">&nbsp;</p></td>
    </tr>
    <tr>
      <td height="160" colspan="3" valign="bottom" align="right"><div align="right">
        <div align="right">
<div align="center">
  <input type="submit" value="Login" size="10"class="submit" name="login_btn">
  &nbsp;&nbsp;&nbsp;&nbsp;<br>
</div>
<br>
        </div>        </td>
    </tr>
  </table>
  <br><br>
  </div>
  <br>
    </form>

                    </div>
         </div>
         
   <div id="footer">
        <div id="foot1">
        <br>Prepared by:<br>
        BHUVNESHWARI PATEL<br>
        CHHABIKANT PATEL
        </div>
      <div id="foot2">
     <br> Guided by:<br>
      Mr. UMESH BANJARE<br>
      Assit. Prof.(CS)
      </div>
</div>
</div>
</form>
</body>
</html>
<?php 
include "my_db.php";

if(isset($_POST['login_btn'])) {
	
	      $username = $_POST['username'];
	  $password= $_POST['password'];
  $record = mysqli_query($con,"SELECT * FROM login where username ='$username' and password ='$password'"); 
   $data = mysqli_fetch_array($record);
         
		 
	
	if($username== $data['username'] &&  $password==$data['password']){
		 
		 header("location:student_register.php");
		  echo "<script> alert('You have loged successfully!')</script>";
		 
		}
		else{
			 echo "<script> alert('Incorrect Username or Password !')</script>";
		    }
}
else
{
echo mysql_error();	
}
?>
