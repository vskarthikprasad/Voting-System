<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  
<head>
<link rel="stylesheet" type="text/css" href="reg.css"> 
</head>
<center>
<div class="login-box">
<img src="avatar.png" class="avatar">
    <form action="change_pass_action.php" method="post" id="myform">

Current Password :
<input type="password" name="cpassword" value="" >
<br>
<br>
New Password:
<input type="password" name="npassword" value="" >
<br>
<br>
Confirm New Password:
<input type="password" name="cnpassword" value="" >
<br>
<br>
<input type="submit" name="cpass" value="UPDATE" >
</form>
</div></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>

