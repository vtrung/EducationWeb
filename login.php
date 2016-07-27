<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EducateNet</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-inverse">
        <!-- Left menu toggle button -->
        <button type="button" id="main-menu-toggle">
            <i class="navbar-icon fa fa-bars icon"></i>
        </button>
        <div class="container-fluid">
            <!-- Logo -->
            <div class="navbar-header">
                <button tye="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">EdConnection</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="collapse navbar-collapse" id="mainNavBar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right right-navbar-nav">
                        <!-- Login Form -->
                        <li class="hidden-sm hidden-xs">
                            <form class="navbar-form pull-left" method="post" action="#" validate="true">
                                <div class="form-group">
                                    <input type="text" class="form-control require-validation" placeholder="Username" v-email="1" v-require="1" name="username" id="username_id"  />
                                    <input type="password" class="form-control require-validation" placeholder="Password" v-require="1" v-minlength="6" name="password" id="password_id" />
                                    <input type="submit" name="signin_submit" class="btn btn-primary" value="Login" />
                                    <input type="hidden" name="action" value="login" />
                                    <input type="hidden" name="#" value="1" />
                                </div>
                            </form>
                        </li>

                        <!-- Login Link -->
                        <li class="visible-sm visible-xs"><a href="#"><i class="dropdown-icon fa fa-sign-in"></i>&nbsp; Login</a></li>
                    </ul>
                </ul>



            </div>

        </div>

    </nav>
    </header>
    <div class="main-container container-fluid">
      <div class="row">
        <section class="lesson-container col-sm-2">
          lesson-container
        </section>
        
        <section class="content-container col-sm-7">
          content-container
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8">

              </div>
              <div class="col-lg-4">

              </div>
            </div>
          </div>
        </section>

        <section class="nav-container col-sm-3">
          nav-container
        </section>
      </div>
    </div>
    <style>
      section{
        border:1px solid black;
        float:left;
        height: 600px;
      }

      .main-container{
        overflow: auto;
      }
    </style>
  </body>

</html>
