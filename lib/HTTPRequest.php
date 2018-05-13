<?php

namespace OCFram;

class HTTPRequest {

    /**
     * Return requested cookie's data
     * @param String $key
     * @return String or null
     */
    public function cookieData(String $key) {
        return isset($_COOKIE['$key']) ? $_COOKIE['key'] : null;
    }

    /**
     * Return true if requested cookie exists
     * @param String $key
     * @return bool
     */
    public function cookieExists(String $key) {
        return isset($_COOKIE['key']);
    }

    /**
     * Return requested GET's data
     * @param String $key
     * @return String or null
     */
    public function getData(String $key) {
        return isset($_GET['key']) ? $_GET['key'] : null;
    }

    /**
     * Return true if requested $_GET exists
     * @param String $key
     * @return bool
     */
    public function getExists(String $key) {
        return isset($_GET['key']);
    }

    /**
     *
     * @return mixed
     */
    public function method() {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Return requested POST's data
     * @param String $key
     * @return String or null
     */
    public function postData(String $key) {
        return isset($_POST['key']) ? $_POST['key'] : null;
    }

    /**
     * Return true if requested $_POST exists
     * @param String $key
     * @return bool
     */
    public function postExists(String $key) {
        return isset($_POST['key']);
    }

    /**
     * @return mixed
     */
    public function requestURI() {
        return $_SERVER['REQUEST_URI'];
    }
}