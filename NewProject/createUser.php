

<?php require("NavBar.php");



$errorfname = $errorlname = $erroruname = $errorDOB = $errorPC = $errorCNum = "";
$allFields = "yes";
if (isset($_POST['submit'])){
if ($_POST['fname']==""){
$errorfname = "First name is mandatory";
$allFields = "no";
 }
if ($_POST['lname']==null){
$errorlname = "Last name is mandatory";
$allFields = "no";
 }
 if ($_POST['DOB']==""){
 $errorPC = "Date of Birth is mandatory";
 $allFields = "no";
 }
if ($_POST['PC']==""){
$errorPC = "Postcode is mandatory";
$allFields = "no";
 }
 
if ($_POST['CNum']==""){
$errorCNum = "Contact Number is mandatory";
$allFields = "no";
 }
if($allFields == "yes")
 {
$createUser = "createUser()";
header('Location: createUserSummary.php?createUser='.
$createUser);
 }
}

include_once("createUserSQL.php");
?>







<div class="container pb-5">
        <main Prod="main" class="pb-3">
<div class="row">
            <div class="col-6">
                <form method="post">
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">First 
Name</label>
                        <input class="form-control" type="text" name = 
"fname">
                        <span class="text-danger"><?php echo
$errorfname; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Last 
Name</label>
                        <input class="form-control" type="text" name = 
"lname">
                        <span class="text-danger"><?php echo
$errorlname; ?></span>
                   </div>

                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Date 
of Birth</label>
                        <input class="form-control" type="text" name = 
"DOB">
                        <span class="text-danger"><?php echo
$errorDOB;   ?></span>
                   </div>
                   
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Month of birth</label>
                        <select name="uid" class="form-control">
                            <option value="active">Jan</option>
                            <option value="closed">Feb</option>
                            <option value="blocked">Mar</option>
                            <option value="blocked">Apr</option>
                            <option value="blocked">May</option>
                            <option value="blocked">Jun </option>
                            <option value="blocked">Jul</option>
                            <option value="blocked">Aug</option>
                            <option value="blocked">Sep</option>
                            <option value="blocked">Oct</option>
                            <option value="blocked">Nov</option>
                            <option value="blocked">Dec</option>
                        
?></select>
                   </div>
                   
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont"> Post Code </label>
                        <input class="form-control" type="text"
name = "PC">
                        <span class="text-danger"><?php echo $errorPC;
?></span>
                   </div>
                   
                   <div class="form-group col-md-6">
                        <label class="control-label labelFont">Contact 
Number</label>
                        <input class="form-control" type="text" name = 
"CNum">
                        <span class="text-danger"><?php echo
$errorCNum; ?></span>
                   </div>

                   <div class="form-group col-md-4">
                        <label class="control-label labelFont">Products</label>
                        <select name="CNum" class="form-control">
                            <option value="active">£100 6 months</option>
                            <option value="closed">£300 5 month</option>
                            <option value="blocked">£500 3 months</option>
                            <option value="blocked">£800 3 months</option>
                            <option value="blocked">£1000 3 months</option>
                            <option value="blocked">£5000 3 months
                            <option value="blocked">£10000 5 months</option>
                            <option value="blocked">£15000 5 months</option>
                            </option>
                        </select>
                   </div>

                   <div class="form-group col-md-4">
                        <input class="btn btn-primary" type="submit"
value="Create User" name ="submit">
                    </div>
                 </form>
             </div>
         </div>
        </main>

</div>

