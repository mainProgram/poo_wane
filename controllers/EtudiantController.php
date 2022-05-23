<?php
    namespace App\Controller;
    use App\Core\Controller;
use App\Model\Etudiant;

    class EtudiantController extends Controller{
        public function listerEtudiant(){
            $etudiants = Etudiant::findAll();
            $datas = [
                "etudiants" => $etudiants
            ];
            $this->render("etudiant/liste", $datas);
        }
    }