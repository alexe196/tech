<?php

namespace App\src\controller;

use App\src\Model\House;
use App\src\Service\Pagination;

class Controller
{

    static function index() {

        $pagination = new Pagination();

        $data = $pagination->getNav();

        $nav = $pagination->nav();

        require_once 'view/index.php';
    }

}