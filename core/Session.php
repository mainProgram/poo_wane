<?php
    namespace App\Core;
    use App\Model\User;

    class Session{
        private User $user;

        public function __construct() {
            if (session_status()== PHP_SESSION_NONE)
                session_start();
        }

        public static function is_connect(){
            return isset($_SESSION["KEY_USER_CONNECT"]);
        }

        public function set(string $key, $data) //ajout de données dans la session
        {
            $_SESSION[$key] = $data;
        }

        public function get(string $key) 
        {
            return $_SESSION[$key];
        }


        public function getUser()
        {
            return $this->user;
        }

        public function setUser($user):self
        {
            $this->user = $user;
            return $this;
        }

        public function destroy($key){
            unset($key);
            session_destroy();
        }

        public static function can_see(array $arr){
            return in_array($_SESSION["KEY_USER_CONNECT"]->role, $arr);
        }
    }
