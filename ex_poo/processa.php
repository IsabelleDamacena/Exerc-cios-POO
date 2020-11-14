<?php
 
    include_once 'aluno.class.php';

    $aluno = new Aluno;
    $aluno->setmat(420);
    $aluno->setnome("Gilbert Blythe");
    $aluno->setnota1(8);
    $aluno->setnota2(9);
    $aluno->settrabalho(8);
    /* chamando funções e mostrando valores */
    echo "Número de matrícula do aluno: " . $aluno->showmat() . "<br>";
    echo "Nome do aluno: " . $aluno->shownome() . "<br>";
    echo "Nota da primeira prova: " . $aluno->shownota1() . "<br>";
    echo "Nota da segunda prova: " . $aluno->shownota2() . "<br>";
    echo "Nota do trabalho: " . $aluno->showtrabalho() . "<br>";
    echo $aluno->verificamedia();


?>