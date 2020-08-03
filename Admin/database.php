<?php 


class Database{

	private $conn;
	private $table;

	public function __construct($config){

		try {

			$this -> conn = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}",$config['username'],$config['password']);

			$this -> conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			
		} catch (PDOException $error) {

			echo "Couldn't connect to the DB.";
			
		}
	
	}



	public function set_table($table){

		$this -> table = $table;
	}



	public function table_handler($table){

		if($table){

			return $table;

		} else{

			if($this -> table){

				return $this -> table;
				
			} else{

				throw new Exception("You Didn't Connect To (set_table) Method Yet. ");
				
			}

		}
	}



	public function insert_items($data,$table=null){

		$table = $this -> table_handler($table);


		$data_key = array_keys($data);
		
		$data_vlaue = array_values($data);


		$prepare_field = implode(",", $data_key);

		$prepare_values = implode(",",array_map(function($item){

			return " '$item' ";

		}, $data_vlaue));


		$query = ("INSERT INTO $table ($prepare_field) VALUES ($prepare_values)");

		$stmt = $this -> conn -> prepare($query);

		return $stmt -> execute();

	}


}















?>