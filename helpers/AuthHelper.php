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
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'];
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
