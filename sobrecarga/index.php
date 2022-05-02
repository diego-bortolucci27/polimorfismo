<?php

    require_once 'Mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cachorro.php';

    $mamifero1 = new Mamifero();
    $mamifero1->emitirSom();
    
    $lobo = new Lobo();
    $lobo->emitirSom();

    $cachorro = new Cachorro();
    $cachorro->emitirSom();

    $lobo = new Lobo();
    $lobo->emitirSom();

    $cachorro = new Cachorro();
    $cachorro->emitirSom();
?>