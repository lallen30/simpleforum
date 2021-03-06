<?php include('includes/header.php'); ?>
<ul id="posts">
	<li id="main-post" class="post post">
		<div class="row">
			<div class="col-md-2">
				<div class="user-info">
					<img class="profilepic pull-left" src="<?php echo BASE_URI; ?>images/avatars/<?php echo $post->profilepic; ?>" />
					<ul>
						<li><strong><?php echo $post->username; ?></strong></li>
						<li><?php echo userPostCount($post->user_id); ?> Posts</li>
						<li><a href="<?php echo BASE_URI; ?>posts.php?user=<?php echo $post->user_id; ?>">View posts</a>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="post-content pull-right">
					<?php echo $post->body; ?>
				</div>
			</div>
		</div>
	</li>


	<?php foreach($replies as $reply) : ?>
	<li class="post post">
		<div class="row">
			<div class="col-md-2">
				<div class="user-info">
					<img class="profilepic pull-left" src="<?php if(isset($reply->profilepic)){ echo BASE_URI; ?>images/avatars/<?php echo $reply->profilepic; } else { echo BASE_URI; ?>images/avatars/profilepic.jpg<?php } ?>" />
					<ul>
						<li><strong><?php echo $reply->username; ?></strong></li>
						<li><?php echo userPostCount($reply->user_id); ?> Posts</li>
						<li><a href="<?php echo BASE_URI; ?>posts.php?user=<?php echo $reply->user_id; ?>">View posts</a>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="post-content pull-right">
					<?php echo $reply->body; ?>
				</div>
			</div>
		</div>
	</li>
	<?php endforeach; ?>

				</ul>
				<h3>Reply To post</h3>
				<?php if(isLoggedIn()) : ?>
				<form role="form" method="post" action="post.php?id=<?php echo $post->id; ?>">
  					<div class="form-group">
						<textarea id="reply" rows="10" cols="80" class="form-control" name="body"></textarea>
						<script>
							CKEDITOR.replace( 'reply' );
            			</script>
  					</div>
 					 <button name="do_reply" type="submit" class="btn btn-default">Submit</button>
				</form>
			<?php else : ?>
				<p>
				Please login to reply.
				</p>
			<?php endif; ?>
<?php include('includes/footer.php'); ?>
