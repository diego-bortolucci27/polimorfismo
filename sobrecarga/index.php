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
    $cachorro->reagirFrase("Oi Amigão!");
    $cachorro->reagirFrase("Pare!");
    $cachorro->reagirHora(11, 45);
    $cachorro->reagirHora(21, 00);
    $cachorro->reagirDono(true);
    $cachorro->reagirDono(false);
    $cachorro->reagirIdadePeso(2, 12.5);
    $cachorro->reagirIdadePeso(17, 4.5);

    $lobo = new Lobo();
    $lobo->emitirSom();

    $cachorro = new Cachorro();
    $cachorro->emitirSom();
?>