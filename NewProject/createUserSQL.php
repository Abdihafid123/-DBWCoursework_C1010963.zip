



<?php ;

function createUser(){

    $created = false;//this variable is used to indicate the creation is successfull or not
    $db = new SQLite3('C:\xampp\StudentModule.db'); // db connection - get your db file here. Its strongly advised to place your db file outside htdocs. 
    $sql = 'INSERT INTO User(userID, UserName, firstName, lastName, DOB, CNum, Prod) VALUES (:uID, :userName, :fName, :lName, :rol, :CNum, :Prod)';
    $stmt = $db->prepare($sql); //prepare the sql statement

    //give the values for the parameters
    $stmt->bindParam(':uID', $_POST['uid'], SQLITE3_TEXT); //we use SQLITE3_TEXT for text/varchar. You can use SQLITE3_INTEGER or SQLITE3_REAL for numerical values
    $stmt->bindParam(':userName', $_POST['uname'], SQLITE3_TEXT); 
    $stmt->bindParam(':fName', $_POST['fname'], SQLITE3_TEXT);
    $stmt->bindParam(':lName', $_POST['lname'], SQLITE3_TEXT);
     $stmt->bindParam(':DOB', $_POST['DOB'], SQLITE3_TEXT);
    $stmt->bindParam(':CNum', $_POST['CNum'], SQLITE3_TEXT);
    $stmt->bindParam(':Prod', $_POST['Prod'], SQLITE3_TEXT);

    //execute the sql statement
    $stmt->execute();

    //the logic
    if($stmt){
        $created = true;
    }

    return $created;
}

?>
