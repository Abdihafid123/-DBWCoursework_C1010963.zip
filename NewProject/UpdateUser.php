<?php require("NavBar.php");

$db = new SQLite3('C:\xampp\StudentModule.db');
$sql = "SELECT * FROM User WHERE userId=:uid";
$stmt = $db->prepare($sql);
$stmt->bindParam(':uid', $_GET['uid'], SQLITE3_TEXT);
$result= $stmt->execute();
$arrayResult = [];
while($row=$result->fetchArray(SQLITE3_NUM)){
$arrayResult [] = $row;
}

if (isset($_POST['submit'])){
    $db = new SQLite3('C:\xampp\StudentModule.db');
    $sql = "UPDATE User SET Username = :uname, userId = :uid, firstName
    = :fname, lastName = :lname, ContactNumber = :CNum, Prod = :Prod WHERE
    userId = :uid";
    $stmt = $db->prepare($sql);
    
    $stmt->bindParam(':fname',$_POST['fname'], SQLITE3_TEXT);
    $stmt->bindParam(':lname',$_POST['lname'], SQLITE3_TEXT);
    $stmt->bindParam(':DOB',$_POST['DOB'], SQLITE3_TEXT);
    $stmt->bindParam(':PC',$_POST['PC'], SQLITE3_TEXT);
    $stmt->bindParam(':CNum',$_POST['CNum'], SQLITE3_TEXT);
    $stmt->bindParam(':Prod',$_POST['Prod'], SQLITE3_TEXT);
    $stmt->execute();
    header('Location: ViewUser.php')
?>

<div class="row">
<div class="col-11">
<form method="post">
<div class="form-group col-md-3">
<label class="control-label 
labelFont">Username</label>
<input class="form-control" type="text" name = 
"uname" value="<?php echo $arrayResult[0][1]; ?>">
</div>
<div class="form-group col-md-3">
<label class="control-label labelFont">User 
ID</label>
<input class="form-control" type="text" name = 
"uid" value="<?php echo $arrayResult[0][2]; ?>">
</div>
<div class="form-group col-md-3">
<label class="control-label labelFont">First 
Name</label>
<input class="form-control" type="text" name = 
"fname" value="<?php echo $arrayResult[0][3]; ?>">
</div>
<div class="form-group col-md-3">
<label class="control-label labelFont">Last 
Name</label>
<input class="form-control" type="text" name = 
"lname" value="<?php echo $arrayResult[0][4]; ?>">
</div>
<div class="form-group col-md-3">
<label class="control-label 
labelFont">CNum</label>
<select name="CNum" class="form-control">
<option value="active" <?php echo
($arrayResult[0][6]=="active") ? "selected" : ""; ?>>Active</option>
<option value="closed" <?php echo
($arrayResult[0][6]=="closed") ? "selected" : ""; ?>>Closed</option>
<option value="blocked" <?php echo
($arrayResult[0][6]=="blocked") ? "selected" : ""; ?>>Blocked</option>
</select>
</div>

<div class="form-group col-md-3">
<label class="control-label 
labelFont">Prod</label>
<select name="Prod" class="form-control">
<option value="admin" <?php echo
($arrayResult[0][7]=="admin") ? "selected" : ""; ?>>Admin</option>
<option value="staff" <?php echo
($arrayResult[0][7]=="staff") ? "selected" : ""; ?>>Staff</option>
<option value="student" <?php echo
($arrayResult[0][7]=="student") ? "selected" : ""; ?>>Student</option>
</select>
</div>
<div class="form-group col-md-3">
<input type="submit" name="submit"
value="Update" class="btn btn-primary">
</div>
<div class="form-group col-md-3"><a
href="ViewUser.php">Back</a></div>
</form>
</div>
</div>


