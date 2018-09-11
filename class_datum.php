<?php
/**
 * Created by PhpStorm.
 * User: amir.zamani
 * Date: 11.09.18
 * Time: 10:34
 */

// Beginn der Klasse
class datum
{
    // 1) Eigenschaften --------------------------
    private $uts;

    // 2) Konstruktor (Methode AutoStart)-----------
    public function __construct()
    {
        $this->uts = time();
    }

    // 3) Methoden

    /**
     * @return mixed
     */
    public function getUts()
    {
        return $this->uts;
    }

    /**
     * @param mixed $uts
     */
    public function setUts($zahl): void
    {
        $this->uts = $zahl;
    }

    public function getDatum()
    {
        return date("d.m.Y H:i:s", $this->uts);
    }
}

