<?php
    namespace App\Controller;
    use App\Core\Controller;
use App\Model\User;

    class UserController extends Controller{
        public function listeruser(){
            $users = User::findAll();
            $datas = [
                "users" => $users
            ];
            $this->render("user/liste", $datas);
        }
    }