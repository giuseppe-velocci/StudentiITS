<?php
declare(strict_types=1);

class CorsoIts {
    protected $nome;
    protected $istituto;
    protected $durataInAnni;
    protected $materie = [];

    const MAX_NUMERO_MATERIE = 16;
    const MAX_VOTO = 30;

    public function __construct(string $nome, Istituto $istituto, int $durataInAnni) {
        $this->istituto = $istituto;
        $this->nome = $nome;
        $this->durataInAnni = $durataInAnni;
    }

    public function getNome() :string{
        return $this->nome;
    }

    public function getDurataInAnni() :int {
        return $this->durataInAnni;
    }
    
    public function addMateriaPerCorso(Materia $m) :void {
        if (! isset($this->materie[$m->nomeMateria]) && count($this->materie) < self::MAX_NUMERO_MATERIE) {
            $this->materie[$m->nomeMateria] = clone($m);
        }
    }

    public function setVoto(string $materia, int $voto) :bool {
        if (! array_key_exists($materia, $this->materie)) {
            return false;
        }
        
        if ($voto > MAX_VOTO) {
            $this->materie[$materia]->setVoto(0); 
        } else {
            $this->materie[$materia]->setVoto($voto); 
        }
        return true;
    }
}