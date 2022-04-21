<?php

    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';

    $mamifero = new Mamififero();
    $mamifero->setPeso(33.5);
    $mamifero->locomover();

    $reptil = new Reptil();
    $reptil->locomover();

    $peixe = new Peixe();
    $peixe->locomover();

    $ave = new Ave();
    $ave->locomover();


?>