<?php include"my_db.php";?>
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
                              
     <div id="right-sec">
   <br><br><br>
<div id="fetch" align="center">
  <p>
    <label for="textfield">:</label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="442" border="0">
    <tr>
      <th height="47" colspan="2" scope="col"><h2>Student Login</h2></th>
      </tr>
    <tr>
      <th style="font-size: 16px" scope="col"><div align="right">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        STUDENT ID
      </div></th>
      <th scope="col"><p>&nbsp;</p>
        <p>&nbsp; </p>
        
          <input type="text" name="bstid" id="textfield">
        </p></th>
    </tr>
    <tr>
      <th width="177" style="font-size: 16px" scope="col"><div align="right">E-MAIL</div></th>
      <th width="249" scope="col"><input type="email" name="stemail"></th>
    </tr>
    <tr>
      <td height="122" colspan="2"><div align="center">
        <input type="submit"  value="Get Student Detail" class="submit"  name="bdetail_btn">
        </div>        <div align="center"></div></td>
      </tr>
  </table>
  <p>&nbsp;</p>

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

