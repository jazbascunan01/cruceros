<?php
class AuthHelper {

    public function __construct() {   
    }

    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function checkLoggedIn() {
        self::start();
        AuthHelper::checkTime();
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
    }
    public static function checklogin(){
        if (!(self :: checkLoggedIn())){
            header('Location: ' . BASE_URL . "login");
            die;
        }
    }
    public static function checkTime(){
        AuthHelper::start();
        if(!isset($_SESSION['time'])){
            $_SESSION['time'] = time();
        }
        else {
            if(time() - $_SESSION['time'] > 300){//5 minutos
                AuthHelper::logout();
                header("Location:". BASE_URL . "login");
                die();
            }
        }
    }

    public static function setUser($user) {
        self::start();
        $_SESSION['user'] = $user;
    }

    public static function getUser() {
        self::start();
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    public static function logout() {
        self::start();
        session_destroy();
    }
}
