<?php require('core/init.php'); ?>
<?php
//Create Post oci_fetch_object
$post = new Post;

// GET Template and assign Vars
$template = new Template('templates/frontpage.php');

// Assign Variables
$template->posts = $post->getAllPosts();
$template->totalPosts = $post->gettotalPosts();
$template->totalCategories = $post->getTotalCategories();

//Display template
echo $template;
