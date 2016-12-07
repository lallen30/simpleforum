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
          $this->db->query("SELECT posts.*, users.username, users.profilepic, categories.name FROM posts
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


	  /*
	 * Get Posts By Category
	 */
	public function getByCategory($category_id){
		$this->db->query("SELECT posts.*, categories.*, users.username, users.profilepic FROM posts
						INNER JOIN categories
						ON posts.category_id = categories.id
						INNER JOIN users
						ON posts.user_id=users.id
						WHERE posts.category_id = :category_id
		");
		$this->db->bind(':category_id', $category_id);

		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}

	/*
	 * Get Posts By Username
	 */
	public function getByUser($user_id){
		$this->db->query("SELECT posts.*, categories.*, users.username, users.profilepic FROM posts
						INNER JOIN categories
						ON posts.category_id = categories.id
						INNER JOIN users
						ON posts.user_id=users.id
						WHERE posts.user_id = :user_id
		");
		$this->db->bind(':user_id', $user_id);

		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}

	  /*
	 * Get Total # of Posts
	 */
	public function getTotalPosts(){
		$this->db->query('SELECT * FROM posts');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

	/*
	 * Get Total # of Categories
	*/
	public function getTotalCategories(){
		$this->db->query('SELECT * FROM categories');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

	/*
	 * Get Category By ID
	*/
	public function getCategory($category_id){
		$this->db->query("SELECT * FROM categories WHERE id = :category_id
		");
		$this->db->bind(':category_id', $category_id);

		//Assign Row
		$row = $this->db->single();

		return $row;
	}

	/*
	 * Get Total # of Replies
	*/
	public function getTotalReplies($post_id){
		$this->db->query('SELECT * FROM replies WHERE post_id = '.$post_id);
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

	/*
	 * Get Post By ID
	 */
	public function getPost($id){
		$this->db->query("SELECT posts.*, users.username, users.name, users.profilepic FROM posts
						INNER JOIN users
						ON posts.user_id = users.id
						WHERE posts.id = :id
		");
		$this->db->bind(':id', $id);

		//Assign Row
		$row = $this->db->single();

		return $row;
	}

	/*
	 * Get Post Replies
	 */
	public function getReplies($post_id){
		$this->db->query("SELECT replies.*, users.* FROM replies
						INNER JOIN users
						ON replies.user_id = users.id
						WHERE replies.post_id = :post_id
						ORDER BY create_date ASC
		");
		$this->db->bind(':post_id', $post_id);

		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}

}
