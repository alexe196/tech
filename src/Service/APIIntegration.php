<?php


namespace App\src\Service;


class APIIntegration
{

    private $url = 'https://trial.craig.mtcserver15.com/api/properties?api_key=2S7rhsaq9X1cnfkMCPHX64YsWYyfe1he';
    private $url2 = 'https://trial.craig.mtcserver15.com/api/properties?api_key=2S7rhsaq9X1cnfkMCPHX64YsWYyfe1he&page%5Bnumber%5D=';

    function json_api() {

        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_POSTFIELDS, array());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array() );
        $result = curl_exec( $curl );
        curl_close( $curl );
        $resultPlace = json_decode($result);


        return $resultPlace;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public  function getUrl2() {
        return $this->url2;
    }

}