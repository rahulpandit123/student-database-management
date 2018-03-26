<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location:admin/admindash.php');
}
?>


<!Doctype html>
<html lang="en_us">
<head>
<meta charset="UTF-8">
<title>Admin login</title>
</head>
<body>
<h1 align="center">Admin login</h1>
<form method="post" action="login.php">
<table align="center">
<tr>
<td>username</td>
<td><input type="text" name="uname" required></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" name="pass" required>
</td>

<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
<tr> 

</table>
</form>
</body>
</html>


<?php
include('dbconn.php');
if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	$qry="SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	
	if($row <1)
	{
		?>
		<script>
		alert('login Id or paasword did not match');
		window.open('login.php','_self');
		</script>
		<?php
	}
	 else
	 {
		 $data=mysqli_fetch_assoc($run);
		 $id=$data['id'];
		 echo '$id';

		 $_SESSION['uid']=$id;
		 header('location:admin/admindash.php');
	 }
}

?>
