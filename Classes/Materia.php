<?php
declare(strict_types=1);

class Materia {
    public $nomeMateria;
    protected $votoStudente;
    const MAX_VOTO = 30;


    public function __construct(string $nome){
        $this->nomeMateria = $nome;
    }

    public function setVoto(int $voto) :void{
        if ($voto > self::MAX_VOTO || $voto < 0) {
            $voto = 0;
        }
        $this->votoStudente = $voto;
    }

    public function getVoto() :int{
        return $this->votoStudente;
    }
};