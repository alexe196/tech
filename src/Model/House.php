<?php


namespace App\src\Model;


use  App\common\DBConnect;
use PDO;

class House
{

   private $pdo;

    public function __construct() {
        $this->pdo = DBConnect::getInstance();
    }

    public function partValue($param) {
        return '("'.$param->county.'", "'.$param->country.'", "'.$param->town.'",
                "'.$param->description.'", "'.$param->address.'", "'.$param->image_full.'", "'.$param->image_thumbnail.'", "'.$param->latitude.'",
                "'.$param->longitude.'", "'.$param->num_bedrooms.'", "'.$param->num_bathrooms.'", "'.$param->price.'", "'.$param->pdescription.'",
                "'.$param->type.'")';
    }

    public function addDataApi($param) {

        try {
            $stmt = $this->pdo->prepare("INSERT INTO house (County, Country, Town, Description, DisplayableAddress, Image,
                               Thumbnail, Latitude, Longitude,NumberofBedrooms, NumberofBathrooms, 
                               Price,PropertyDescription,type) 
                               VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $result = $stmt->execute([$param->county, $param->country, $param->town,
                $param->description, $param->address, $param->image_full, $param->image_thumbnail, $param->latitude,
                $param->longitude, $param->num_bedrooms, $param->num_bathrooms, $param->price, $param->pdescription,
                $param->type]);

            $sql='INSERT INTO house (County, Country, Town, Description, DisplayableAddress, Image,
                               Thumbnail, Latitude, Longitude,NumberofBedrooms, NumberofBathrooms, 
                               Price,PropertyDescription,`type`)';


        }  catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    }
    public function addPaketDataApi($vals) {

        try {
            $sql = "INSERT INTO house (County, Country, Town, Description, DisplayableAddress, Image,
                               Thumbnail, Latitude, Longitude,NumberofBedrooms, NumberofBathrooms, 
                               Price,PropertyDescription,type)  VALUES  $vals";

            $affectedRowsNumber = $this->pdo->exec($sql);

        }  catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    }

    public function getHouse($iimit, $step) {
        $stmt = $this->pdo->query("SELECT * FROM house LIMIT $step, $iimit");
        $results =  $stmt->fetchAll();

        return $results;
    }

    public function getCountHouse() {
        $stmt = $this->pdo->query("SELECT COUNT(*) as count FROM house");
        $results = $stmt->fetch(PDO::FETCH_OBJ);

        return $results;
    }
}