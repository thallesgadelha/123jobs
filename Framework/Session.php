<?php

namespace Framework;

class Session {
    /**
     * Start the session
     */
    public static function start() {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * Set a session key/value pair
     */
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Get a session value by the key
     */
    public static function get($key, $default = null) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }

    /**
     * Check if session key exists
     */
    public static function has($key) {
        return isset($_SESSION[$key]);
    }

    /**
     * Clear session by key
     */
    public static function clear($key) {
        if(isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    /**
     * Clear all session data
     */
    public static function clearAll() {
        session_unset();
        session_destroy();
    }

    /**
     * Set a flash message
     */
    public static function setFlashMessage($key, $message) {
        self::set('flash_' . $key, $message);
    }

    /**
     * Gat a flash message and unset
     */
    public static function getFlashMessage($key, $default = null) {
        $message = self::get('flash_' . $key, $default);
        self::clear('flash_' . $key);
        return $message;
    }
}