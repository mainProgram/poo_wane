<?php

namespace App\Core;

class Role{

    private Session $session;
    
    public function __construct(Session $session) {
        $this->session = $session;
    }

    // public static function is_connect(){
    //     return isset($this->session["KEY_USER_CONNECT"]);
    // }

    // public static function is_RP(){
    //     return isset($this->session["KEY_USER_CONNECT"]) &&  $this->session["KEY_USER_CONNECT"]["role"] == "ROLE_RP";
    // }

    // public static function is_AC(){
    //     return isset($this->session["KEY_USER_CONNECT"]) &&  $this->session["KEY_USER_CONNECT"]["role"] == "ROLE_AC";
    // }

    // public static function is_etudiant(){
    //     return isset($this->session["KEY_USER_CONNECT"]) &&  $this->session["KEY_USER_CONNECT"]["role"] == "ROLE_ETUDIANT";
    // }
    
    // public static function is_professeur(){
    //     return isset($this->session["KEY_USER_CONNECT"]) &&  $this->session["KEY_USER_CONNECT"]["role"] == "ROLE_PROFESSEUR";
    // }




}