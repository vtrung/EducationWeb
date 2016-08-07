<?php
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","cooperph-db","NKWCQdcXNLL2X6T6","cooperph-db");
if($mysqli->connect_errno){
echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
}
?>
