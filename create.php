
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Create a topic</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>

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
            <li><a href="create.html">Create a Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="row">
        <div class="col-md-8">
          <div class="main-col">
              <div class="block">
                  <h1 class="pull-left">Create a Post</h1>
                  <h4 class="pull-right">A simple forum built with php</h4>
                  <div class="clearfix"></div>
                  <hr>
                  <form role="form" enctype="multipart/form-data" method="post" action="create.php" >
                      <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Post title">
                      </div>
                      <div class="form-group">
                          <label>Category</label>
                          <select class="form-group">
                              <option value="">option1</option>
                              <option value="">option2</option>
                              <option value="">option3</option>
                              <option value="">option4</option>
                              <option value="">option5</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="body">Post Body</label>
                        <textarea name="body" class="form-control" id="body" rows="10" cols="80"></textarea>
                        <script>CKEDITOR.replace('body');</script>
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

  </body>
</html>
