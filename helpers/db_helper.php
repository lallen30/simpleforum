<?php
/*
 * Get # of relies per post
 */
function replyCount($post_id){
    $db = new Database;
    $db->query('SELECT * FROM replies WHERE post_id = :post_id');
    $db->bind(':post_id', $post_id);
    //Assign Rows
    $rows = $db->resultset();
    //Get Count
    return $db->rowCount();
}

/*
 * Get Categories
 */
function getCategories(){
    $db = new Database;

    $db->query('SELECT * FROM categories');

    //Assign Result Set
    $results = $db->resultset();

    return $results;
}


/*
 * USer post
 */
function userPostCount($user_id){
    $db = new Datebase;
    $db->query('SELECT * FROM posts
                WHERE user_id = :user_id
                ');
    $db->bind(':user_id', $user_id);
    //Assign Rows
    $rows =$db->resultset();
    //Get Count
    $post_count = $db->rowCount();

    $db->query('SELECT * FROM replies
                WHERE user_id = :user_id
                ');
    $db->bind(':user_id', $user_id);
    //Assing Rows
    $rows =$db->resultset();
    //Get Count
    $reply_count = $db->rowCount();
    return $post_count + $reply_count;
}
