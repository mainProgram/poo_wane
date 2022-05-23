<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Annee;

    class AnneeController extends Controller{
     
        public function creerAnnee(){

        }

        public function listerAnnee(){
            $annees = Annee::findAll();
            $datas = [
                "annees" => $annees
            ];
            $this->render("annee/liste", $datas);
        }
    }