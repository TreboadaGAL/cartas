<?php
#tipo de baraja
$palos = ['oro','espada','copa','basto'];
$valores = ['1','2','3','4','5','6','7','10','11','12'];

# creamos el mazo completo y ordenado
$mazo = array();
foreach ($palos as $palo) {
    foreach ($valores as $valor) {
        # generando el mazo
        $mazo[] = array("palo"=>$palo, "valor"=>$valor);
    }
}
# mezclamos el mazo
shuffle($mazo);


#creamos los jugadores
$jugadores = ['Heroe','Villano'];

# creamos la mano
$manos = array();

#repartimos
foreach ($jugadores as $jugador) {
    #en este ejemplo repartiremos solo 3 cartas
    $primera_carta = array_shift($mazo);
    $segunda_carta = array_shift($mazo);
    $tercera_carta = array_shift($mazo);

    #tratar de mejorar el reparto de manos encapsulando otro foreach con diferentes "mangas" o repartos.


    # calculando el valor de la mano
    $valor_de_mano = $primera_carta['valor']+$segunda_carta['valor']+$tercera_carta['valor'];

    # generando la mano para imprimir a posteriori el ganador
    $manos[] = array(
        "jugador" => $jugador,
        "primera_carta"=>$primera_carta,
        "segunda_carta"=>$segunda_carta,
        "tercera_carta"=>$tercera_carta,
        "valor"=>$valor_de_mano
    );
}

?>