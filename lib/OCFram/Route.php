<?php

namespace OCFram;


class Route {

    protected   $action,
                $module,
                $url,
                $varsName,
                $vars;

    public function __construct(String $url, String $module, String $action, Array $varsNames) {
        $this->action = $action;
        $this->module = $module;
        $this->url = $url;
        $this->varsName = $varsNames;
    }

    public function hasVars() {
        return !empty($this->varsName);
    }

    public function match($url) {
        if (preg_match('`^'.$this->url.'$`', $url, $matches)) {
            return $matches;
        } else {
            return false;
        }
    }

    public function setAction($action) {
        if (is_string($action)) {
            $this->action = $action;
        }
    }

    public function setModule($module) {
        if (is_string($module)) {
            $this->module = $module;
        }
    }

    public function setUrl($url) {
        if (is_string($url)) {
            $this->url = $url;
        }
    }

    public function setVarsNames(array $varsName) {
        $this->varsName = $varsName;
    }

    public function setVars(array $vars) {
        $this->vars = $vars;
    }

    public function action() {
        return $this->action;
    }

    public function module() {
        return $this->module;
    }

    public function url() {
        return $this->url;
    }

    public function varsNames() {
        return $this->varsName;
    }

    public function vars() {
        return $this->vars;
    }

}