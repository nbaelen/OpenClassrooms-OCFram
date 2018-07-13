<?php

namespace OCFram;


class HTTPResponse extends ApplicationComponent {

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

    public function setPage(Page $page) {
        $this->page = $page;
    }

    public function setCookie($name, $value = '', $expire  = 0, $path = null, $domain = null, $secure = false, $httpOnly = true) {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
    }
}