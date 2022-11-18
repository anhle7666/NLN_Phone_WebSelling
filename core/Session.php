<?php
class Session{
    public static function init(){
        session_start();
    }

    public static function set($key, $val){
        $_SESSION[$key]=$val;
    }
    public static function get($key){
        return isset($_SESSION[$key])?$_SESSION[$key]:false;
    }
    public static function checkSesion(){
        if(self::get('login')==false){
            self::destroy();
            header("Location: http://localhost/Quan_Ly_Ban_Hang/?module=account&action=index");
        }
    }
    public static function checkAdmin(){
        if(self::get('admin')==false){
            self::destroy();
            header("Location: http://localhost/Quan_Ly_Ban_Hang/?module=account&action=index");
        }
    }
    public static function destroy(){
        session_destroy();
    }
    public static function unset($key){
        session_unset($key);
    }
}