<?php require('core/init.php'); ?>
<?php
// Create Post Object
$post = new Post;

// Get category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

// GET Template and assign Vars
$template = new Template('templates/posts.php');

// Assign Template Variable
if(isset($category)){
    $template->posts = $post->getByCategory($category);
    $template->title = 'Posts In "'.$post->getCategory($category)->name.'"';
    } else {
    $template->posts = $post->getAllPosts();
    $template->totalPosts = $post->gettotalPosts();
    $template->totalCategories = $post->getTotalCategories();
    }

//Display template
echo $template;
