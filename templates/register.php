<?php include('includes/header.php'); ?>

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
<?php include('includes/footer.php'); ?>
