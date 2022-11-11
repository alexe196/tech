<?php


namespace App\src\Service;

use App\src\Service\APIIntegration;
use App\src\Model\House;

class ApiSetDB
{

    private $APIIntegration;

    public function __construct()
    {
        $this->APIIntegration = new APIIntegration();
    }

    public function getData($param) {
        $param->pdescription = $param->property_type->description;
        return $param;
    }

    public function getQuery() {

        return $this->APIIntegration->json_api();

    }

    public function setData() {

        $house = new House();
        $last_page = 1;
        $current_page = 0;

        while ($last_page>$current_page) {

            $param = $this->getQuery();

            if( $last_page == 1 ) {
                $last_page = $param->last_page;
            }
            $val = array();

            if(!empty($param->data)) {

                $current_page = $param->current_page;

                foreach ($param->data as $item) {
                    $parametr = $this->getData($item);
                    $val[] = $house->partValue($parametr);
                }

                $vals = implode(",", $val);
                $house->addPaketDataApi($vals);
                $this->APIIntegration->setUrl($param->next_page_url);

            } else {
                $url_num = $current_page + 1;
                $this->APIIntegration->setUrl($this->APIIntegration->getUrl2() . $url_num);
                usleep(1000);
            }


        }
    }
}