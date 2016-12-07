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
