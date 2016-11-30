
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Registration page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SimpleForum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create An Account</a></li>
            <li><a href="create.html">Create Topic</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="row">
        <div class="col-md-8">
          <div class="main-col">
              <div class="block">
                  <h1 class="pull-left">Create an account</h1>
                  <h4 class="pull-right">A simple forum built with php</h4>
                  <div class="clearfix"></div>
                  <hr>
                  <form role="form" enctype="multipart/form-data" method="post" action="register.php" >
                      <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="username">Username*</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="password">Password*</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="confirmpassword">Confirm Password*</label>
                        <input type="confirmpassword" class="form-control" id="confirmpassword" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <label for="profilepic">Upload Profile Pic</label>
                        <input type="file" id="profilepic" name="profilepic">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>
                      <div class="form-group">
                        <label for="about">About Me</label>
                        <textarea name="about" class="form-control" id="about" placeholder="Tell us about yourself" rows="10" cols="80"></textarea>
                      </div>
                      <button name="submit" type="submit" class="btn btn-default">Submit</button>
                    </form>

              </div>
          </div>
        </div>
        <div class="col-md-4">
        <div class="sidebar">
          <div class="block">
            <h3>Login Form</h3>
            <form role="form">
            <div class="form-group">
              <label>Username</label>
              <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>
            <button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.html"> Create Account</a>
          </form>
          </div>

          <div class="block">
          <h3>Categories</h3>
          <div class="list-group">
            <a href="#" class="list-group-item active">All Topics <span class="badge pull-right">14</span></a>
            <a href="#" class="list-group-item">Design<span class="badge pull-right">4</span></a>
            <a href="#" class="list-group-item">Development<span class="badge pull-right">9</span></a>
            <a href="#" class="list-group-item">Business & Marketing <span class="badge pull-right">12</span></a>
            <a href="#" class="list-group-item">Search Engines<span class="badge pull-right">7</span></a>
            <a href="#" class="list-group-item">Cloud & Hosting <span class="badge pull-right">3</span></a>
          </div>
        </div>
        </div>

        </div>
        </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
