<?php
declare(strict_types=1);

require "Classes/StudenteICT.php";
require "Classes/Istituto.php";
require "Classes/CorsoITS.php"; 
require "Classes/Materia.php";

function testDump(Object $o, string $title) {
    echo "<h2>$title</h2>";
    echo "<pre>";
    var_dump($o);
    echo "</pre>";
}

function main() {
    $itsIct = new Istituto("ITC", "Torino", "Jacopo Durandi", 10);

    $corsoICTBackend = new CorsoITS("Backend", $itsIct, 2);
    $corsoICTBackend->addMateriaPerCorso(new Materia("PHP"));
    $corsoICTBackend->addMateriaPerCorso(new Materia("Java"));
    $corsoICTBackend->addMateriaPerCorso(new Materia("C#"));
    $corsoICTBackend->addMateriaPerCorso(new Materia("NodeJS"));
    $corsoICTBackend->addMateriaPerCorso(new Materia("Cloud"));

    $studenteBackend = new StudenteICT("Mario", "Rossi", "M", new DateTime("1990/5/12"), 2018, $corsoICTBackend);
    $studenteBackend->setVoto("NodeJS", 26);

    testDump($itsIct, "ITS ICT Torino");
    testDump($corsoICTBackend, "Corso Backend");
    testDump($studenteBackend, "Studente del corso backend");
    testDump($studenteBackend->getIstituto(), "Istituto del corso backend");

    echo "<h2>Anno di fine del corso</h2>", $studenteBackend->getAnnoFineCorso();
}

main();