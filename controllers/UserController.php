<?php
    namespace App\Controller;
    use App\Core\Controller;
use App\Model\User;

    class UserController extends Controller{
        public function listeruser(){
            $users = User::findAll("role");
            $datas = [
                "users" => $users,
                "title" => "Liste des utilisateurs"
            ];
            $this->render("user/liste", $datas);
        }
    }