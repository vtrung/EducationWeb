  // Classes Data
  var myclasses = [];
  function getAllClasses(){
    $.get("/data/getAllClasses.php", function(results){
      console.log(results);
    })
  };
  function getUserClasses(user){
    var params = {"username":user};
    $.post("/data/getClasses.php", params, function(results){
      if(JSON.parse(results) != false){
        console.log(results);
        myclasses = JSON.parse(results);
        displayMyClasses();
      } else {
        $(".my-class-list").empty();
      }
    })
  };

  function addClass(user, classid){
    var params = {"user":user, "classid":classid};
    $.post("/data/addclass", param, function(result){
      //update $(".my-class-list") function
    })
  }
  function removeClass(user, classid){
    var params = {"user":user, "classid":classid};
    $.post("/data/removeClass.php", param, function(result){
      //update $(".my-class-list") function
    })
  }
  function displayMyClasses(){
    console.log(myclasses);
    $(".my-class-list").empty();
    for(var i = 0; i < myclasses.length; i++){
      $(".my-class-list").append(
        "<div class='my-class-container' onclick='getClassLessons(\"" + myclasses[i].id + "\")'>"
          + myclasses[i].name +
        "</div>"
      );
      console.log(myclasses[i]);
    }
  }
  //  END Classes Data


  // Class Lessons
  function getClassLessons(classid){
    var params = {"classid": classid};
    $.post("/data/getLessons.php", params, function(result){
      if(JSON.parse(result) != false){
        console.log(result);
        displayLessons(JSON.parse(result));
      } else {
        $(".my-lesson-list").empty();
      }
    })
  }

  function displayLessons(lessons){
    $(".my-lesson-list").empty();
    for(var i = 0; i < lessons.length; i++){
      $(".my-lesson-list").append(
        "<div class='my-lesson-container' onclick='getLesson(\"" + lessons[i].id + "\")'>"
          + lessons[i].name +
        "</div>"
      );
    }
  }
  // END Class Lessons

  $(document).ready(function() {

    getUserClasses("test");
    // selectors

  });
