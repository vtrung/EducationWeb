<?php
ini_set('display_errors', 'On');
$mysqli = new mysqli ("oniddb.cws.oregonstate.edu", "cooperph-db", "NKWCQdcXNLL2X6T6", "cooperph-db");
if (!$mysqli || $mysqli->connect_errno){
	echo "Connection error" . $mysqli->connect_errno . " " . $mysqli->connect_error;
}
if(!($stmt = $mysqli->prepare("SELECT FROM User(email, password) VALUES (?,?)"))){
    echo "Prepare failed: " . $stmt->connect_errno . " " . $stmt->connect_error;
}
if(!($stmt->bind_param("ss", $_POST['username'], $_POST['password'], $_POST['DOB']))){
    echo "Bind failed: " .$stmt->connect_errno . " " . $stmt->connect_error;
}
if(!$stmt->execute()){
    echo "Execute failed: " .$stmt->connect_errno . " " . $stmt->connect_error;
} else {
    echo "Account Successfully Accessed";
}
?>
