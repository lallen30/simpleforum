<?php require('core/init.php'); ?>
<?php
//Create post object
$post = new Post;

if(isset($_POST['do_create'])){
    //Create a validator object
    $validate = new Validator;

    $data = array();
    $data['title'] = $_POST['title'];
    $data['body'] = $_POST['body'];
    $data['category_id'] =  $_POST['category'];
    $data['user_id'] = getUser()['user_id'];
    $data['last_activity'] = date("Y-m-d H:i:s");

    //Required fields
    $field_array = array('title', 'body', 'category');

    if($validate->isRequired($field_array)){
        //Register user
        if($post->create($data)){
            redirect('index.php', 'Your post has been posted.', 'success');
        } else {
            redirect('post.php?id='.$post_id, 'Something went wrong', 'error');
        }
    } else {
        redirect('create.php', 'Please fill in all required fields', 'error');
    }
}

// GET Template and assign Vars
$template = new Template('templates/create.php');

// Assign Variables
$template->heading = 'This is the template heading';

//Display template
echo $template;
