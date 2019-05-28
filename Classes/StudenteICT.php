<?php
declare(strict_types=1);

require "AbstractStudente.php";

class StudenteICT extends AbstractStudente {
    protected $durataAnniCorso;
    public $email;
    protected $corso;
    protected $aziendaStage;

    protected $itsEmailDomain = "@edu.itspiemonte.it";

    public function __construct(string $nome, string $cognome, string $genere, DateTime $dataNascita, int $annoIscrizione, CorsoITS $corso) {
        parent::__construct($nome, $cognome, $genere, $dataNascita, $annoIscrizione);
        $this->corso = $corso;
        $this->email = $this->newEmail($nome, $cognome);
    }

    public function setAziendaStage(string $azienda) : void {
        $this->aziendaStage = $azienda;
    }

    public function setVoto(string $materia, int $voto) :bool {
        return ($this->corso->setVoto($materia, $voto));
    }

    protected function getDurataCorso() :int {
        return $this->corso->getDurataInAnni();
    }

    protected function newEmail(string $nome, string $cognome):string {
        return "$nome.$cognome".$this->itsEmailDomain;
    }

}