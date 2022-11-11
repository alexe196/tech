<?php


namespace App\src\Service;

use  App\src\Model\House;

class Pagination
{
    public $step = 0;
    public $iimit = 10;


    public function getNav() {
        $this->setStep();
        $house = new House();
        return $house->getHouse($this->iimit, $this->step);
    }

    public function setStep() {
        $step = (int) $_REQUEST['step'];
        if($step != 0) {
            $step = $step * $this->iimit;
        }
        $this->step = $step;
    }

    public function getSte() {
        return $this->step;
    }

    public function nav() {
        $house = new House();
        $col = 0;
        $result = array();
        $nav = $house->getCountHouse();
        if(!empty($nav)) {

            $count = $nav->count;
            $col = $this->countNav($count);

            $str = '<div class="nav">';
            for ($i=1; $i<=$col; $i++) {

                $str.= '<a href="/?step='.$i.'" >'.$i.'</a> | ';
            }
            $str .= '</div>';
        }

        return $str;
    }


    public function countNav($count) {

        $col =0;
        if($count > 0) {
            if($count % $this->iimit == 0) {
                $col = (int)($count / $this->iimit);

            } else {
                $col = (int)($count / $this->iimit) + 1;

            }
        }

        return (int) $col;

    }


}