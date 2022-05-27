<?php
    namespace App\Model;

    abstract class User extends Personne{
        protected string $login;
        protected string $password;
 
        public function getLogin()
        {
            return $this->login;
        }
         
        public function setLogin($login):self
        {
            $this->login = $login;
            return $this;
        }
   
        public function getPassword()
        {
            return $this->password;
        }
                 
        public function setPassword($password):self
        {
                $this->password = $password;
                return $this;
        } 
        public function getRole()
        {
                return $this->role;
        }

        public function setRole($role):self
        {
                $this->role = $role;
                return $this;
        }

        public static function findUserByLoginAndPassword($login, $password):object|null{
            return parent::findBy("select * from personne where login = ? and password = ?", [$login, $password], true);
        }      
        
    }