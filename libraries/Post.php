<?php
class Post{
    //Initialize DB Variable
    private $db;

    /*
     * Constructor
     */
     public function __construct(){
         $this->db = new Database;
     }

     /*
      * Get all posts
      */
      public function getAllPosts(){
          $this->db->query("SELECT posts.*, users.username, user.profilepic, categories.name FROM posts
                            INNER JOIN users
                            On posts.user_id = users.id
                            INNER JOIN categories
                            ON posts.category_id = categories.id
                            ORDER BY create_date DESC
                            ");
        //Assign Results Set
        $results = $this->db->resultset();

        return $results;
      }

}
