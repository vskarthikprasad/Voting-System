<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<center><h4> <font size="6" color="green">Welcome <?php echo $_SESSION['SESS_NAME']; ?>, Please Make a Vote </font></h4></center>

<head>
<link rel="stylesheet" type="text/css" href="voter.css"> 
</head>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Select a Party to Make your Vote <BR><br>
<input type="radio" name="lan" value="BJP">  BJP<img src="bjp.png">
<input type="radio" name="lan" value="TRS">TRS<img src="trs.jpg"><BR><BR>
<input type="radio" name="lan" value="AAP"> TDP  <img src="tdp.jpg">
<input type="radio" name="lan" value="NOTA">  ADMK<img src="admk.jpg"><BR><BR>
<input type="radio" name="lan" value="NIRDLIY">  DMK<img src="dmk.jpg">
<input type="radio" name="lan" value="YSRCP">YSRCP<img src="ysrcp.jpg">
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
