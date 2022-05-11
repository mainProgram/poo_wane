<?php

namespace App\Core;

class Role{

    private Session $session;
    
    public function __construct(Session $session) {
        $this->session = $session;
    }

    public static function is_connect(){
        
    }

    public static function is_RP(){
        
    }

    public static function is_AC(){
        
    }

    public static function is_Etudiant(){
        
    }


}