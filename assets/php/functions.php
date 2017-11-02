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
    private $name;
    private $contactName;
    private $contactMail;
    private $contactPhone;
    private $comments;
    private $info;
    private $personalContact;
    private $quantity;
    private $casis;

    public function __construct($val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8) {
        $this->name = $val1;
        $this->contactName = $val2;
        $this->contactMail = $val3;
        $this->contactPhone = $val4;
        $this->comments = $val5;
        $this->info = $val6;
        $this->personalContact = $val7;
        $this->quantity = $val8;
        $this->casis = $val8;
        
        $this->connection = new DB_con();
    }
    
    public function sendSchool(){
        
        $sql = "INSERT INTO contestants (name, contactName, contactMail, contactPhone, comments, info, personalContact, quantity)"
                . "VALUES ('".$this->name."', '".$this->contactName."', '".$this->contactMail."', '".$this->contactPhone."', '".$this->comments."', '".$this->info."', '".$this->personalContact."', '".$this->quantity."')";
    }
    
    public function sendComp(){
        $sql = "INSERT INTO compContestant (name, contactName, contactMail, contactPhone, comments, info, personalContact, casis)"
=======
        $sql = "INSERT INTO comContestants (name, contactName, contactMail, contactPhone, comments, info, personalContact, casis)"
>>>>>>> 3b98f40dde672cd2aff0e9ce4cc1f6a99be331e7
                . "VALUES ('".$this->name."', '".$this->contactName."', '".$this->contactMail."', '".$this->contactPhone."', '".$this->comments."', '".$this->info."', '".$this->personalContact."', '".$this->casis."')";
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

class Events{
    private $connection;

    public function __construct() {
        $this->connection = new DB_con();
    }

    public function getEventData() {
            $array = array();
            $query = "SELECT name, image, description, date_start, date_end FROM events";
            $result = $this->connection->sql($query);
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, array("name"=>$row['name'], "image"=>$row['image'], "description"=>$row['description'], "date_start"=>$row['date_start'], "date_end"=>$row['date_end']));
            }
            return $array;
        }
    }