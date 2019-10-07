<?php

# este ejemplo es similar a cartas.php pero utilizando mejor la semántica de objetos

class baraja {
    var $palos;
    var $valores;
    var $mazo;
    public function __construct() {
        $this->palos = ['oro','espada','copa','basto'];
        $this->valores = ['1','2','3','4','5','6','7','10','11','12'];
    }
    public function mazo() {
        foreach ($this->palos as $palo) {
            foreach($this->valores as $valor) {
                $this->mazo[] = array("palo"=>$palo, "valor"=>$valor);
            }
        }
    }
    public function mezcla() {
        shuffle($this->mazo);
    }
}
?>