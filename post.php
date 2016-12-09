<?php require('core/init.php'); ?>
<?php
// Create Post Object
$post = new Post;

//Get ID From URL

$post_id = $_GET['id'];

// GET Template and assign Vars
$template = new Template('templates/post.php');

// Assign Template Variable
    $template->post = $post->getPost($post_id);
    $template->replies = $post->getReplies($post_id);
    $template->title = $post->getPost($post_id)->title;

//Display template
echo $template;
