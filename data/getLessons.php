<?php
   if (!empty($_POST) && !empty($_POST["classid"])){
    if($_POST["classid"] == "111"){
      // TEST return value: only for science 101
      $array1 = array(
        (object)["name"=>"Lesson 1", "id"=>"1"],
        (object)["name"=>"Lesson 2", "id"=>"2"]
      );
      echo json_encode($array1);
    } else {
       echo json_encode(false);
    }
  } else {
    echo json_encode(false);
  }
?>
