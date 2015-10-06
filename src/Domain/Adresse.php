<?php

namespace MicroCMS\Domain;

class Adresse
{
    /**
     * Adresse codePostal.
     *
     * @var integer
     */
    private $codePostal;

    /**
     * Adresse ville.
     *
     * @var string
     */
    private $ville;

    public function getcodePostal() {
        return $this->codePostal;
    }

    public function setcodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    public function getville() {
        return $this->ville;
    }

    public function setville($ville) {
        $this->ville = ville;
    }
}