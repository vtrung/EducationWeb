<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","cooperph-db","NKWCQdcXNLL2X6T6","cooperph-db");
if($mysqli->connect_errno){
echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edconnection</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/script/app.js"></script>
  </head>

  <body>
    <header>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">EdConnection</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#">Classes</a></li>
		  <li><a href="#">Settings</a></li> 
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li data-toggle="modal" data-target="#registerPopUp"><a href="#"><span class="glyphicon glyphicon-user"></span>Register</a></li>
		  <div class="modal fade" id="registerPopUp">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h1 class="modal-title">Register</h1>
							</div>
							<!-- body (form) -->
							<div class="modal-body">
				<form role="form" method="post" action="loginRegistration.php">	
					<table>
						<tr>
							<td>First name</td>
							<td>Last name</td>
						</tr>
						<tr>
							<td><input type="text" name="FName"/></td>
							<td><input type="text" name="LName"/></td>
						</tr>
					
						<tr>
							<td>email address</td>
							<td>password</td>
						<tr>
						<tr>
							<td><input type="email" name="email"/></td>
							<td><input type="password" name="password"/></td>
						<tr>
						
						<tr>
							<td>Birthdate</td>
						</tr>
						<tr>
							<td><input type="date" name= "DOB"/></td>
						</tr>
					
						<tr>
							<td>Country</td>
							<td>Language</td>
						</tr>
						<tr>
							<td>
								<!-- country list populated from DB-->
								<select name="country">
								<?php
								if(!($stmt = $mysqli->prepare("SELECT id, Country FROM Country"))){
									echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
								}

								if(!$stmt->execute()){
									echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
								}
								if(!$stmt->bind_result($id, $type, $model)){
									echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
								}
								while($stmt->fetch()){
									echo '<option value= '.$id.' "> ' . $country . '<br/>';
								}
								$stmt->close();
								?>								

								</select>
							</td>
							<td>
								<select name="language">
								<?php
								if(!($stmt = $mysqli->prepare("SELECT id, language FROM Language"))){
									echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
								}

								if(!$stmt->execute()){
									echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
								}
								if(!$stmt->bind_result($id, $type, $model)){
									echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
								}
								while($stmt->fetch()){
									echo '<option value= '.$id.' "> ' . $language . '<br/>';
								}
								$stmt->close();
								?>			
								</select>
							</td>
						</tr>

						<tr>
							<td>Choose your grade level</td>
							<td rowspan="2"><i>Primary/Secondary</i></td>
						</tr>
						<tr>
							<td>
								<select name="startingGrade">
								<?php
								if(!($stmt = $mysqli->prepare("SELECT id, role FROM Role"))){
									echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
								}

								if(!$stmt->execute()){
									echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
								}
								if(!$stmt->bind_result($id, $type, $model)){
									echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
								}
								while($stmt->fetch()){
									echo '<option value= '.$id.' "> ' . $role . '<br/>';
								}
								$stmt->close();
								?>		
								</select>
							</td>
						</tr>	
					</table>
				</form>
							</div>
							<!-- button -->
							<div class="modal-footer">
								<button class="btn btn-primary btn-block">Register</button>
							</div>
						</div>
					</div>
			</div>
		  <li data-toggle="modal" data-target="#loginPopUp"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  <div class="modal fade" id="loginPopUp">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h1 class="modal-title">Login</h1>
							</div>
							<!-- body (form) -->
							<div class="modal-body">
								<form role="form">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Password">
									</div>
								</form>
							</div>
							<!-- button -->
							<div class="modal-footer">
								<button class="btn btn-primary btn-block">Register</button>
							</div>
						</div>
					</div>
			</div>
		</ul>
	  </div>
	</nav>
    </header>
    <div class="main-container container">
      <div class="welcome-container">
        Welcome to EdConnection
      </div>
      <div>
        <a class="btn" href="/login.php">Login</a>
      </div>
    </div>
    <style>
      #login_failed{
        color: red;
      }
      section{
        border:1px solid black;
        float:left;
        height: 600px;
      }
      .main-container{
        overflow: auto;
      }
	  .modal-header {
		  background-color: #0480be;
	  }
    </style>
  </body>

</html>
