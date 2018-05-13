<?php

namespace OCFram;


class HTTPResponse {

    protected $page;

    public function addHeader(String $header) {
        header($header);
    }

    public function redirect(String $location) {
        header('Location: ' . $location);
        exit();
    }

    public function redirect404(String $location) {

    }

    public function send() {
        exit($this->page->getGeneratedPage());
    }

    public function setCookie($name) {
        setcookie($name,'',0,null,false,true);
    }
}