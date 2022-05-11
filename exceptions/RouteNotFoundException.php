<?php

    namespace App\Exception;

    class RouteNotFoundException extends \Exception{
        public $message = "Page not found ! Error 404";
    }