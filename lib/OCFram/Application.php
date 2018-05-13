<?php

namespace OCFram;


abstract class Application {

    protected   $httpRequest,
                $httpResponse,
                $name;

    public function __construct() {
        $this->httpRequest = new HTTPRequest();
        $this->httpResponse = new HTTPResponse();
        $this->name = '';
    }

    abstract public function run();

    public function getHttpRequest() {
        return $this->httpRequest;
    }

    public function getHttpResponse() {
        return $this->httpResponse;
    }

    public function getName() {
        return $this->name;
    }
}