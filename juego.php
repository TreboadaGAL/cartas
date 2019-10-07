<?php



    require_once("cartas.class.php");


    # test de la case baraja


    $juego = new baraja();
    $mazo = $juego->mazo();

    echo var_dump($mazo);

    $mezcla = $juego->mezcla();

    echo var_dump($mezcla);

?>