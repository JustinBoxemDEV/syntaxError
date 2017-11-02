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

class Forms {
    private $connection;

    public function __construct() {
        $this->connection = new DB_con();
    }
    
    public function sendSchool(){
        
    }
    
    public function sendComp(){
        
    }
}

class Enquete{
    private $connection;

    public function __construct() {
        $this->connection = new DB_con();
    }

    public function getEnqueteResults() {
            $array = array();
            $query = "SELECT name, opinion FROM enquete";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, array("name"=>$row['name'], "opinion"=>$row['opinion']));
            }
            return $array;
        }
}