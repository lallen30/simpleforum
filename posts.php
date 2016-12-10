<?php require('core/init.php'); ?>
<?php
// Create Post Object
$post = new Post;

// Get category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

// Get user From URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

// GET Template and assign Vars
$template = new Template('templates/posts.php');

// Assign Template Variable
if(isset($category)){
    $template->posts = $post->getByCategory($category);
    $template->title = 'Posts In "'.$post->getCategory($category)->name.'"';
    }

//Check for User filter
if(isset($user_id)){
    $template->posts = $post->getByUser($user_id);
    //$template->title = 'Post by "'.$user->getUser($user_id)->username.'"';
}

if(!isset($category) && !isset($user_id)){
    $template->posts = $post->getAllPosts();
    $template->totalPosts = $post->gettotalPosts();
    $template->totalCategories = $post->getTotalCategories();
    }


//Display template
echo $template;
