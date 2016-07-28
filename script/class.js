function init(){
  // Classes Data Calls
  function getUserClasses(user){
    var params = {"user":user};
    $.post("/data/getclass", params, function(results){
      //update $("#classes") function
    })
  };
  function addClass(user, class){
    var params = {"user":user, "class":class};
    $.post("/data/addclass", param, function(result){
      //update $("#classes") function
    })
  }
  function removeClass(user, class){
    var params = {"user":user, "class":class};
    $.post("/data/removeclass", param, function(result){
      //update $("#classes") function
    })
  }
  //  END Classes Data Calls


  // Class Lessons
  function getClassLessons(class){
    var params = {"class": class};
    $.post("/data/getlessons", params, function(result){
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



}
