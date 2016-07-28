
// Login Functions
var login_cookie = "edu-user";
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
  var password = $("#password_id").val();
  console.log(username);
  if(login(username,password)){
    document.cookie = login_cookie+ "=" +username;
    window.location.href = "/classes.php";
  } else{
      $("#login_failed").show();
  }
}


function login(username, password){
  // call server login, should return bool
  return (username == "test" && password == "test");
}

// END Login Functions

$(document).ready(function() {

  $("#loginform").submit(function(event){
    $("#login_failed").hide();
    loginform();
    event.preventDefault();
  })

});
