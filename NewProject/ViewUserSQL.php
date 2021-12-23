<?php
include_once ("ViewUser.php")


function getUsers (){
$db = new SQLITE3('C:\xampp\StudentModule.db');
$sql = "SELECT * FROM User";
$user=[$i]
$stmt = $db->prepare($sql);
$result = $stmt->execute();
$arrayResult = [];//prepare an empty array first
while ($row = $result->fetchArray()){ // use 
fetchArray(SQLITE3_NUM) - another approach
$arrayResult [] = $row; //adding a record until end of records
 }
return $arrayResult;
}




?>


<td><a href="updateUser.php?uid=<?php echo $user[$i]['userId']; ?
>">Update</a></td>