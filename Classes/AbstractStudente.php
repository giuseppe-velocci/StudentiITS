<?php
declare(strict_types=1);

abstract class AbstractStudente {
    public $nome;
    public $cognome;
    public $genere;
    public $dataNascita;
    protected $annoIscrizione;

    public function __construct(string $nome, string $cognome, string $genere, DateTime $dataNascita, int $annoIscrizione) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->genere = $genere;
        $this->dataNascita = $dataNascita;
        $this->annoIscrizione = $annoIscrizione;
    }

   
    public function getAnnoFineCorso() :int{
        return (int) $this->annoIscrizione + $this->getDurataCorso();
    }

    // protected methods
    protected abstract function getDurataCorso() :int;
}