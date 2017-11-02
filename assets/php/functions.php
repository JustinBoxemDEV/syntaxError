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
<<<<<<< HEAD
}

<<<<<<< HEAD
class pages {
	private $connection;
	protected $page;
	protected $content;

	function __construct() {
		$this->connection = new DB_con();
	}

	public function getText($pagename) {
		$query = "SELECT content FROM " . $pagename . "";
		var_dump($query);
		$result = $this->connection->sql($query);
		while ($row = mysqli_fetch_assoc($result)) {
                echo $row['content'];
            }
	}
=======
class Portfolio{
    private $connection;

    public function __construct() {
        $this->connection = new DB_con();
    }

    public function getPortfolioData() {
            $array = array();
            $query = "SELECT project, image, short FROM portfolio";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, array("project"=>$row['project'], "image"=>$row['image'], "short"=>$row['short']));
            }
            return $array;
        }
>>>>>>> 55c1ff460b02002b0fffd0fc1020c2baaeccb025
=======
>>>>>>> parent of 55c1ff4... made edits
}