<?php
   if (!empty($_POST) && !empty($_POST["username"])){
    if($_POST["username"] == "test"){
      //$array1 = "test";
      $array1 = array(
        (object)["name"=>"Science 101", "id"=>"111"],
        (object)["name"=>"Math 101", "id"=>"112"]
      );
      echo json_encode($array1);
    } else {
       echo json_encode(false);
    }
  } else {
    echo json_encode(false);
  }
?>
