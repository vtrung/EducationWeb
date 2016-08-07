
// config
var url_prefix = "/~cooperph/"; //in osu server, add example: "/~vtrung/";
// Login Functions
var login_cookie = "edu-user";
var successLogin = "Account Successfully Accessed";

function checkLogin(){
  var cookie = document.cookie;
  if(cookie.substring(login_cookie) >= 0)
    return true;
  else {
    return false;
  }
}
function logout(){
  // remove login cookie
  document.cookie = login_cookie +"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}


function loginform(){
  var username = $("#username_id").val();
  var password = $("#username_id").val();
  console.log(username);
  if(login(username,password)){
    document.cookie = login_cookie+ "=" +username;
    window.location.href = url_prefix + "/classes.php";
  } else{
      $("#login_failed").show();
  }
}


function login(username, password){
  // call server login, should return bool
  var params = {"username": username, "password": password};
  console.log("Parameter:");
  console.log(params);
  $.post(url_prefix + "/data/login.php", params, function(results){
    if(JSON.parse(results) != false){
      console.log(results);
      if(result == successLogin)
        return true;
    } else {
      console.log("false");
      return false;
    }
  })
}

// END Login Functions

$(document).ready(function() {

  $("#loginform").submit(function(event){
    $("#login_failed").hide();
    loginform();
    event.preventDefault();
  })

});
