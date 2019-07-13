<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<center>

<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<head>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<center><font size="4" >
	<div class="login-box">
	<img src="avatar.png" class="avatar">
<form action="login_action.php" method="post" id="myform" >
Voter ID : 
<input type="text" name="username"   value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" > 
</form>
<div>

</font>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

