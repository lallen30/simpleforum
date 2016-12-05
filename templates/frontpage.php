<?php include('includes/header.php'); ?>
    <ul id="posts">
    <?php if($posts) : ?>
        <?php foreach($posts as $post) : ?>
        <li class="post">
            <div class="row">
                <div class="col-md-2">
                  <img class="avatar pull-left" src="img/profilepic.jpg" />
                </div>
                <div class="col-md-10">
                     <div class="post-content pull-right">
                        <h3><a href="post.php"><?php echo $post->title; ?></a></h3>
                        <div class="post-info">
                          <a href="category.html">Development</a> >> <a href="profile.html">BradT81</a> >> Posted on: June 12, 2014
                          <span class="badge pull-right">3</span>
                        </div>
                     </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
<?php else : ?>
        <p>No Post to display.</p>
    <?php endif; ?>
    </ul>
      <h3>Forum Statistics</h3>
    <ul>
      <li>Total Number of Users: <strong>52</strong></li>
      <li>Total Number of posts: <strong>10</strong></li>
      <li>Total Number of Categories: <strong>5</strong></li>
    </ul>
<?php include('includes/footer.php'); ?>
