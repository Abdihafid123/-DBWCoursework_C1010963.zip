<?php include("NavBar.php"); 
$result = $_GET['createUser']; //you can also use $_REQUEST[''] do 

?>
<div class="container pb-5">
<main Prod="main" class="pb-3">
<h2>User Creation Result</h2><br>
<div>
<?php
if($result){
echo "“Thank you for your interest to open a Time Deposit Account with us under this 
campaign. Your application ID is WWXXYYZZZZZZZ. Only one application is 
allowed per customer.
You will have xx entries for the lucky draw (stand a chance to win £10,000) upon 
successful deposit placement until the end of account tenure.
Your record has been successfully submitted. You may update your record as 
long as your application CNum is “new” by providing the application ID from 
this link”";
 }
else{
echo "Error";
 }
?>
<div><a href="createUser.php">Back</a></div>
</div>
</div>
<?php
include("Footer.php");

