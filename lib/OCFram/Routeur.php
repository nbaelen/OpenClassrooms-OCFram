<?php

namespace OCFram;


class Routeur {

    protected $routes = [];

    const NO_ROUTE = 1;

    public function addRoute(Route $route) {
        if (!in_array($route, $this->routes)) {
            $this->routes += $route;
        }
    }

    public function getRoute($url) {
        foreach ($this->routes as $route) {
            if (($varsValues = $route->match($url)) !== false) {
                if ($route->hasVars()) {
                    $varsName = $route->varNames();
                    $listVars = [];

                    foreach ($varsValues as $key => $match) {
                        if ($key !== 0) {
                            $listVars[$varsName[$key - 1]] = $match;
                        }
                    }

                    $route->setVars($listVars);
                }
            }
        }

        throw new \RuntimeException('Aucune route ne correspond à l\'URL', self::NO_ROUTE);
    }
}