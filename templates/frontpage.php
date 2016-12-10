<?php include('includes/header.php'); ?>
    <ul id="posts">
    <?php if($posts) : ?>
        <?php foreach($posts as $post) : ?>
        <li class="post">
            <div class="row">
                <div class="col-md-2">
                  <img class="profilepic pull-left" src="img/<?php echo $post->profilepic; ?>" />
                </div>
                <div class="col-md-10">
                     <div class="post-content pull-right">
                        <h3><a href="posts.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h3>
                        <div class="post-info">
                          <a href="posts.php?cateory=<?php echo urlFormat($post->category_id); ?>"><?php echo $post->name; ?></a> >>
                           <a href="posts.php?user=<?php echo $post->user_id; ?>"><?php echo $post->username; ?></a> >>
                           Posted on: <?php echo formatDate($post->create_date); ?>
                          <span class="badge pull-right"><?php echo replyCount($post->id); ?></span>
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
