<?php
include 'database.php';

class Sponsor{
	private $connection;
	protected $sponsor_name;
	protected $sponsor_image;
	protected $sponsor_link;

	public function __construct() {
        $this->connection = new DB_con();
    }

//	public function create($name, $image, $link) {
//			$this->sponsor_name = $name;
//			$this->sponsor_image = $image;
//			$this->sponsor_link = $link;
//			return "Sponsor succesvol toegevoegd.";
//		}

	public function getDataFromDB() {
			$array = array();
            $query = "SELECT image, link FROM sponsors";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, array("image"=>$row['image'], "link"=>$row['link']));
            }
            return $array;
		}
}