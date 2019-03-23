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
		//$result_set = $database->query($sql);

		$the_object_array = array();

		while ($row = mysqli_fetch_array($result_set)) {
			$the_object_array[] = self::instantiateObject($row);
		}

		return $the_object_array;
	}


	public static function instantiateObject($the_record) {
		$user_object = new self;

		foreach ($the_record as $the_attribute => $value) {

			if($user_object->has_the_attribute($the_attribute)) {
				$user_object->the_attribute = $value;
			}

		}

		return $user_object;
	}




	private function has_the_attribute($the_attribute) {
		$object_properties = get_object_vars($this);
		return array_key_exists($the_attribute, $object_properties);
	}



}






 ?>