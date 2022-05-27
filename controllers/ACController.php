<?php
    namespace App\Controller;
    use App\Core\Controller;
use App\Model\AC;

    class ACController extends Controller{

        public function listerAC(){
            $acs = AC::findAll();
            $datas = [
                "acs" => $acs,
                "title" => "Liste des Attachés"
            ];
            $this->render("ac/liste", $datas);
        }

        public function addAC(){
            
        }
    }