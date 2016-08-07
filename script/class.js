  // Required
  // app.js
  // var url_prefix from app.js

  // Classes Data
  var myclasses = [];
  function getAllClasses(){
    $.get(url_prefix + "/data/getAllClasses.php", function(results){
      console.log(results);
    })
  };
  function getUserClasses(user){
    var params = {"username":user};
    $.post(url_prefix + "/data/getClasses.php", params, function(results){
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
    $.post(url_prefix + "/data/addclass", param, function(result){
      //update $(".my-class-list") function
    })
  }
  function removeClass(user, classid){
    var params = {"user":user, "classid":classid};
    $.post(url_prefix + "/data/removeClass.php", param, function(result){
      //update $(".my-class-list") function
    })
  }
  function displayMyClasses(){
    console.log(myclasses);
    $(".my-class-list").empty();
    for(var i = 0; i < myclasses.length; i++){
      $(".my-class-list").append(
        "<div class='my-class-container' onclick='getClassLessons(\"" + myclasses[i].id + "\", \"" + myclasses[i].name + "\")'>"
          + myclasses[i].name +
        "</div>"
      );
      console.log(myclasses[i]);
    }
  }
  //  END Classes Data


  // Class Lessons
  var mylessons = [];

  function getClassLessons(classid, classname){
    $(".class-title").html(classname);
    clearLesson();

    var params = {"classid": classid};
    $.post(url_prefix + "/data/getLessons.php", params, function(result){
      if(JSON.parse(result) != false){
        console.log(result);
        displayLessons(JSON.parse(result));
      } else {
        $(".my-lesson-list").empty();
      }
    })
  }

  function displayLessons(lessons){
    mylessons = lessons;
    $(".my-lesson-list").empty();
    for(var i = 0; i < lessons.length; i++){
      $(".my-lesson-list").append(
        "<div class='my-lesson-container' onclick='displayLesson(\"" + i + "\")'>"
          + lessons[i].name +
        "</div>"
      );
    }
  }

  function displayLesson(index){
    $(".content-title").html(mylessons[index].name);
    $(".content-vid").empty();
    $(".content-vid").append('<iframe width="600" height="400" src="' + mylessons[index].vid + '" frameborder="0" allowfullscreen></iframe>');
  }

  function clearLesson(){
    $(".content-title").empty();
    $(".content-vid").empty();
  }
  // END Class Lessons

  $(document).ready(function() {

    getUserClasses("test");
    // selectors

  });
