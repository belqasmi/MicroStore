<?php

namespace MicroCMS\Domain;

class Client
{
    /**
     * Client numeroClient.
     *
     * @var integer
     */
    private $numeroClient;

    /**
     * Client civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Client ville.
     *
     * @var string
     */
    private $ville;

    /**
     * Client ville.
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