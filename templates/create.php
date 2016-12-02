<?php include('includes/header.php'); ?>
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
<?php include('includes/footer.php'); ?>
