<?php

namespace OCFram;

class Entity implements \ArrayAccess {
    protected   $erreurs = [],
                $id;

    public function __construct(array $donnees = []) {
        if (!empty($donnees)) {
            $this->hydrate($donnees);
        }
    }

    public function isNew() {
        return empty($this->id);
    }

    public function erreurs() {
        return $this->erreurs;
    }

    public function id() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = (int) $id;
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $attribut => $valeur) {
            $methode = 'set'.ucfirst($attribut);

            if (is_callable([$this, $methode])) {
                $this->$methode($valeur);
            }
        }
    }

    public function offsetGet($var) {
        if (isset($this->$var) && is_callable([$this,$var])) {
            return $this->$var;
        }
    }

    public function offsetSet($var, $value) {
        $methode = 'set'.ucfirst($var);

        if (isset($this->$var) && is_callable([$this, $var])) {
            $this->$methode($value);
        }
    }

    public function offsetExists($var) {
        return isset($this->$var) && is_callable([$this,$var]);
    }

    public function offsetUnset($var) {
        throw new \Exception('Impossible de supprmer une quelconque valeur');
    }
}