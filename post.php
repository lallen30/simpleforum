<?php require('core/init.php'); ?>
<?php
// Create Post Object
$post = new Post;

//Get ID From URL

$post_id = $_GET['id'];

//Process Reply

if(isset($_POST['do_reply'])){

    $data = array();
    $data['post_id'] = $_GET['id'];
    $data['body'] = $_POST['body'];
    $data['user_id'] = getUser()['user_id'];

    //Create Validator Object
    $validate = new Validator;

    //required fields
    $field_array = array('body');

    if($validate->isRequired($field_array)){
        //Register User
        if($post->reply($data)){
            redirect('post.php?id='.$post_id, 'Your reply as bee posted', 'success');
        } else {
            redirect('post.php?id='.$post_id, 'Something went wrong with your reply', 'error');
        }
    } else {
        redirect('post.php?id='.$post_id, 'Your reply for is blank!', 'error');
    }
}

// GET Template and assign Vars
$template = new Template('templates/post.php');

// Assign Template Variable
    $template->post = $post->getPost($post_id);
    $template->replies = $post->getReplies($post_id);
    $template->title = $post->getPost($post_id)->title;

//Display template
echo $template;
