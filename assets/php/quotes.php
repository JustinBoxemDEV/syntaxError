<?php
include 'database.php';

class quotes {
	private $connection;
	protected $quotes;

	function __construct() {
		$this->connection = new DB_con();
	}

	public function getAllQuotes() {
		$array = array();
		$query = "SELECT opinion, name FROM enquete";
		$result = $this->connection->sql($query);
		while ($row = mysqli_fetch_assoc($result)) {
            array_push($array, array("name"=>$row['name'], "opinion"=>$row['opinion']));
        }
        //var_dump($array);
        return $array;
	}
}


