<?php


namespace App\src\Controller;

use  App\src\Service\ApiSetDB;

class ApiController
{

    public static function index() {

        if (!empty($_POST['action']) && $_POST['action'] == 'api') {
            $apiSetDB = new ApiSetDB();
            $apiSetDB->setData();
        }

        require_once 'view/forma.php';
    }

}