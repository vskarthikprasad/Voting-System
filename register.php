<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>

<center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<head>
<link rel="stylesheet" type="text/css" href="reg.css"> 
</head>
<center><font size="4" >
<div class="login-box">
<img src="avatar.png" class="avatar">
<form action= "reg_action.php" method= "post" id="myform" >
Firstname:
<input type="text" name="firstname" value="" />
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" />
<br>
<br>
Age: 
<input type="text" name="age" value="" />
<br>
<br>
Voter ID: 
<input type="text" name="username" value="" />
<br>
<br>
Password: 
<input type="text" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<br>
<input type="submit" name="submit" value="Next" />
</form>
</div>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>