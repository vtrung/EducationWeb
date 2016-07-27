
function loginform(){
  var username = $("#username_id").val();
  var password = $("#username_id").val();
  console.log(username);
  if(login(username,password))
    window.location.href = "/classes.php";
  else
    $("#login_failed").show();
}

function login(username, password){
  // call server login, should return bool

  return (username == "test" && password == "test");
}

$(document).ready(function() {
  $("#loginform").submit(function(event){
    $("#login_failed").hide();
    loginform();
    event.preventDefault();
  })
});
