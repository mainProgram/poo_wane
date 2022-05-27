<?php
    namespace App\Controller;
    use App\Core\Controller;
    use App\Model\Demande;

    class DemandeController extends Controller{
        public function listerDemandes(){
            $sql = "SELECT d.*, p.nom, p.prenom FROM demande d, personne p WHERE d.etudiant_id= p.id AND d.etat = 1";
            $demandes = Demande::findBy($sql);
            $datas = [
                "title" => "Liste des demandes",
                "demandes" => $demandes
            ];
            $this->render("demande/liste", $datas);
        }

        public function lister_demandes_etudiant(){
            $id = $_SESSION["KEY_USER_CONNECT"]->id;
            $sql = "SELECT * FROM demande WHERE etudiant_id=".$id." AND etat = 1";
            $demandes = Demande::findBy($sql);
            $datas = [
                "title" => "Mes demandes",
                "demandes" => $demandes
            ];
            $this->render("demande/liste", $datas);
        }

        public function formuler_demande(){
            if($this->request->isGet()){
                $datas = [
                    "title" => "Formuler une demande de suspension ou d'annulation d'inscription",
                ];
                $this->render("demande/formuler", $datas);
            }
            elseif($this->request->isPost()){
                extract($_POST);
                $demande = new Demande();
                $demande->setMotif($motif);
                $demande->setDetail($detail);
                $demande->insert();
                $this->lister_demandes_etudiant();
            }
        }

        public function traiter_demande($id){
            $demande = new Demande();
            $demande->setId($id);
            $demande->setTraitement(1);
            $demande->update();
            $this->redirectToRoute("demandes");
        }

        public function refuser_demande($id){
            $demande = new Demande();
            $demande->setId($id);
            $demande->setTraitement(-1);
            $demande->update();
            $this->redirectToRoute("demandes");
        }
        
    }