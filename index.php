<?php

    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';

    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'Golfish.php';
    require_once 'Arara.php';

    $mamifero = new Mamifero();
    $mamifero->setPeso(33.5);
    $mamifero->locomover();

    $reptil = new Reptil();
    $reptil->locomover();

    $peixe = new Peixe();
    $peixe->locomover();

    $ave = new Ave();
    $ave->locomover();


?>