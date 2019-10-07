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
?>