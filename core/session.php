<?php
class Session{
    public static function init(){
        session_start();
    }
    public static function set($var,$value){
        $_SESSION[$var] = $value;
    }
    public static function destroy(){
        session_destroy();
    }
    public static function get($var){
        return $_SESSION[$var] ;
    }
    
}

?>