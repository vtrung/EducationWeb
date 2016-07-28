
  function getAllClasses(){
    $.get("/data/getallclasses.php", function(results){
      console.log(results);
    })
  };
  function getUserClasses(user){
    var params = {"username":user};
    $.post("/data/getclasses.php", params, function(results){
      console.log(results);
    })
  };

  function addClass(user, classid){
    var params = {"user":user, "classid":classid};
    $.post("/data/addclass", param, function(result){
      //update $("#classes") function
    })
  }
  function removeClass(user, classid){
    var params = {"user":user, "classid":classid};
    $.post("/data/removeclass.php", param, function(result){
      //update $("#classes") function
    })
  }
  //  END Classes Data Calls


  // Class Lessons
  function getClassLessons(classid){
    var params = {"class": classid};
    $.post("/data/getlessons.php", params, function(result){
      displayLessons(result);
      //update $("#lessons") function
    })
  }

  function displayLessons(lessons){
    for(var i = 0; i < lessons.length; i++){
      $("#lessons").append(lessons[i]);
    }
  }
  // END Class Lessons
