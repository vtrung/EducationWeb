function testLogin(username, password){
  var params = {"username": username, "password": password};
  console.log("Parameter:");
  console.log(params);
  $.post("/data/login.php", params, function(results){
    if(JSON.parse(results) != false){
      console.log(results);
    } else {
      console.log("false");
    }
  })
}

// Test get Classes
function testGetClasses(username){
  var params = {"username":username};
  console.log("Parameter:");
  console.log(params);
  $.post("/data/getClasses.php", params, function(results){
    if(JSON.parse(results) != false){
      console.log(results);
    } else {
      console.log("false");
    }
  })
};

function testGetLessons(classid){
  var params = {"classid": classid};
  console.log("Parameter:");
  console.log(params);
  $.post("/data/getLessons.php", params, function(result){
    if(JSON.parse(result) != false){
      console.log(result);
    } else {
      console.log("false");
    }
  })
}




function RunTest(){
  console.log("==== Testing GetClasses");
  testGetClasses("test");
  testGetClasses("fake");

  console.log("==== Testing GetLessons");
  testGetLessons("111");
  testGetLessons("string");
  testGetLessons():
}
