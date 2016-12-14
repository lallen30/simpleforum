<?php require('core/init.php'); ?>
<?php
//Create Post oci_fetch_object
$post = new Post;
$user = new User;
// GET Template and assign Vars
$template = new Template('templates/frontpage.php');

// Assign Variables
$template->posts = $post->getAllPosts();
$template->totalPosts = $post->gettotalPosts();
$template->totalCategories = $post->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();
//Display template
echo $template;
