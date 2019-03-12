<?php 

class User {

	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;


	public static function find_all_users() {
		return self::find_this_query("SELECT * FROM users");
	}

	public static function find_user_by_id($id){
		global $database;
		$result_set = self::find_this_query("SELECT * FROM users WHERE id=$id");
		return mysqli_fetch_array($result_set);
	}


	public static function find_this_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		return $result_set;
	}



}






 ?>