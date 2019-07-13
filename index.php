<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<head>
    <link rel="stylesheet" src="text\css" href="style.css">
</head>
<p><center><legend><font color='#008000' size='18'>This system allows all registered users to vote for their favorite POLITICAL PARTY.</p>
<img src="pos.jpg">
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="1.png">
          <h3>Secure and Reliable</h3>
          <p>Third Party Audits & CertificationsVoter-Verified Results100% Availability Guarantee</p>
        </div>
        <div class="box">
          <img src="2.png">
          <h3>Flexible and Simple to Use</h3>
          <p>24 x 7 x 365 Support 
Simple and Accessible Voter Experience 
Internet, Phone, and Paper Ballots</p>
        </div>
        <div class="box">
          <img src="3.png">
          <h3>Industry-Specific Expertise</h3>
          <p>Self Administered or Fully Managed Elections
Professional Electoral Services
Custom Voting Technology</p>
        </div>
      </div>
    </section>
<p>In order to make a vote you have to register first and then login.</font></legend></center>
    <p>&nbsp;&nbsp;</p>

<?php include "footer.php";?>
