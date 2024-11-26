<?php include"my_db.php";?>
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
   <table height="433" border="0" bgcolor="#FFCC66">
  <tr class="lgntitle">
    <td height="66" colspan="2"><div align="center">
      <h2>Admin Information</h2></div></td>
  </tr>
  <tr>
    <td height="31" colspan="2"><div align="left">&nbsp;&nbsp;<strong>ADDRESS</strong>: &nbsp;&nbsp; AT PO - KOSIR, VIA PAMGARH, JANJGIR CHAMPA C.G.</div></td>
    </tr>
  <tr>
    <td height="31" colspan="2"><div align="left">&nbsp;&nbsp;<strong>PHONE NO</strong> <strong></strong>: 7509873448</div></td>
    </tr>
  <tr>
    <td height="29" colspan="2"><div align="left">&nbsp;&nbsp;<strong>E-MAIL</strong> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       ukbanjare05@gmail.com</div></td>
    </tr>
  <tr>
    <td height="56" colspan="2"><hr align="center" color="#333333"><br>
      <div align="center"><strong>    FOR ANY INQUIRIES,PLEASE FILL OUT THE FORM BELOW</strong></div></td>
    </tr>
  <tr>
    <td width="255" height="31"><div align="left"><strong>&nbsp;&nbsp;FULL NAME :</strong></div></td>
    <td width="334"><input type="text" name="name" placeholder="Enter name" size="39"></td>
  </tr>
  <tr>
    <td height="29"><div align="left"><strong>&nbsp;&nbsp;E-MAIL :</strong></div></td>
    <td><input type="email" name="email" placeholder="Enter email" size="39"></td>
  </tr>
  <tr>
    <td height="31"><div align="left"><strong>&nbsp; SUBJECT :</strong></div></td>
    <td><input type="text" name="subject" size="39" placeholder="Enter subject"></td>
  </tr>
  <tr>
    <td height="37" valign="top"><div align="left"><strong>&nbsp;&nbsp;MESSAGE:</strong></div></td>
    <td><textarea name="message" id="saddress2" cols="41" rows="5" placeholder="What is your problem."></textarea></td>
  </tr>
  <tr>
    <td height="31"><div align="left">&nbsp;</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="37" colspan="2" valign="top">&nbsp;
      <div align="center">
        <input type="submit" t_ name="btn_send" value="SEND" class="submit" >
      </div>      <div align="center"></div></td>
    </tr>
  </table>
 <div align="center"><br>
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
