<!Doctype html>
<html>
<head lang= "en_us">
<meta charset="UTF-8">
<title>Home page of project_php</title>
</head>
<body>
<h3 align="right" style="margin-right:20px";><a href="login.php">Admin login</a></h3>
<h1 align="center"> welcome to Student Management System </h1>

<form method="post" action="index.php">
<table style="80%" align ="center" border="1">
<tr>
<td colspan="2" align="center">Student information</td>
</tr>

<tr>
<td align="left"> choose Standard</td>
<td>
<select name="std" required align="center">
<option value="1">Ist  </option>
<option value="2">IInd  </option>
<option value="3">IIIrd  </option>
<option value="4">IV th  </option>
<option value="5"> V th </option>
<option value="6"> VI th </option>


</select>
</td>
</tr>

<tr>
<td align="left">Enter Rollno </td>
<td><input type="text" name="rollno" required></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="show info"</td>
</tr>






</table>
</form>
 </body>
 </html>
 <?php
 if(isset($_POST['submit']))
 {
$standard=$_POST['std'];
$rollno=$_POST['rollno'];	 
 
 include('dbconn.php');
 include('function.php');
 showdetails($standard,$rollno);
  }
  ?>