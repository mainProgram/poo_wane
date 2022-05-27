<?php
    namespace App\Controller;
    use App\Core\Controller;
use App\Model\RP;

    class RPController extends Controller{
        public function listerRP(){
            $rps = RP::findAll();
            $datas = [
                "rps" => $rps,
                "title" => "Liste des responsables pédagogiques"
            ];
            $this->render("rp/liste", $datas);
        }
    }