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
	} }
    

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
}

class Products{
    private $connection;

    public function __construct() {
        $this->connection = new DB_con();
    }

    public function getProductsDB() {
            $array = array();
            $query = "SELECT product, image FROM campaign";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, array("product"=>$row['product'], "image"=>$row['image']));
            }
            return $array;
        }
}