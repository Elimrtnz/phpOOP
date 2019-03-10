<?php 



class Database {

	//makes the connection variable available inside entire application
	public $connection

	// makes connection available anywhere
	function __construct(){
		$this->$open_db_connection();
	}

	//method to open db connection
	public function open_db_connection(){
		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if(mysqli_connect_errno()){
			die("Database connections failed badly"). mysqli_error();
		}
	}

	//method to make queries
	public function query($sql){

		$result = mysqliquery($this->connection, $sql);

		if(!$result) {
			die("Query Failed");
		}
		return $result;
	}

}

//allows var use in application
$database = new Database();










 ?>