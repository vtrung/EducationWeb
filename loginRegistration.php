<?php
ini_set('display_errors', 'On');
$mysqli = new mysqli ("oniddb.cws.oregonstate.edu", "cooperph-db", "NKWCQdcXNLL2X6T6", "cooperph-db");
if (!$mysqli || $mysqli->connect_errno){
	echo "Connection error" . $mysqli->connect_errno . " " . $mysqli->connect_error;
}
if(!($stmt = $mysqli->prepare("INSERT INTO User(fname, lname, email, password, dob, role_id, country_id, language_id,  level_id) VALUES (?,?,?,?,?,?,?,?,?)"))){
    echo "Prepare failed: " . $stmt->connect_errno . " " . $stmt->connect_error; 
}
if(!($stmt->bind_param("sssssiiii", $_POST['FName'], $_POST['LName'], $_POST['email'], $_POST['password'], $_POST['DOB'], $_POST['Role'], $_POST['country'], $_POST['language'], $_POST['Grade']))){
    echo "Bind failed: " .$stmt->connect_errno . " " . $stmt->connect_error;
}
if(!$stmt->execute()){
    echo "Execute failed: " .$stmt->connect_errno . " " . $stmt->connect_error;
} else {
    echo "Account Successfully Created";
}
?>

