<?php

namespace App\Frontend;

use \OCFram\Application;

class FrontendApplication extends Application {

    public function __construct() {
        parent::__construct();

        $this->name = 'Frontend';
    }

    public function run() {
        $controller = parent::getController();
        $controller->execute();

        $this->httpResponse->setPage($controller->page());
        $this->httpResponse->send();
    }
}