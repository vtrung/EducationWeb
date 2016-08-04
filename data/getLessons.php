<?php
   if (!empty($_POST) && !empty($_POST["classid"])){
    if($_POST["classid"] == "111"){
      // TEST return value: only for science 101
      $array1 = array(
        (object)["name"=>"Lesson 1", "id"=>"1", "vid"=>"https://www.youtube.com/embed/RrHnLXMTOWM"],
        (object)["name"=>"Lesson 2", "id"=>"2", "vid"=>"https://www.youtube.com/embed/6W0MHZ4jb4A"]
      );
      echo json_encode($array1);
    } else {
       echo json_encode(false);
    }
  } else {
    echo json_encode(false);
  }
?>
