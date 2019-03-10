<?php 



class Database {

	//makes the connection variable available inside entire application
	public $connection;

	// makes connection available anywhere
	function __construct(){
		$this->open_db_connection();
	}

	//method to open db connection
	public function open_db_connection(){

		//$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		// php has built in mysqli object
		$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if($this->connection->connect_errno){
			die("Database connections failed badly"). $this->connection->connect_errno;
		}
	}

	//method to make queries
	public function query($sql){
		$result = $this->connection->query($sql);
		$this->confirm_query($result);
		return $result;
	}

	private function confirm_query($result){
		if($result){
			die("Query Failed" . $this->connection->error);
		}
	}

	public function escape_string($string) {
		$escaped_string = $this->connection->real_escape_string($string);
		return $escaped_string;
	}

}

//allows var use in application
$database = new Database();










 ?>