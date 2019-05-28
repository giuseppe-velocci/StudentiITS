<?php
declare(strict_types=1);

class Istituto {
    public $settore;
    public $citta;
    public $via;
    public $nCivico;

    public function __construct(string $settore, string $citta, string $via, int $nCivico){
        $this->settore = $settore;
        $this->citta = $citta;
        $this->via = $via;
        $this->nCivico = $nCivico;
    }
}