<?php
    /*
    *
    *   Benson Da Silva
    *
    */

    class Env
    {
       private static $key = 100;
    
        public function x(){
            echo self::$key;
            
        }
        
    }
    
    $obj = new Env();    
    $obj->x();