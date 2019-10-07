<?php

# este ejemplo es similar a cartas.php pero utilizando mejor la semántica de objetos

class baraja {
    var $palos;
    var $valores;
    var $mazo;
    public function __construct() {
        $this->palos = ['oro','espada','copa','basto'];
        $this->valores = ['1','2','3','4','5','6','7','10','11','12'];
        foreach ($this->palos as $palo) {
            foreach($this->valores as $valor) {
                $this->mazo[] = array("palo"=>$palo, "valor"=>$valor);
            }
        }
    }
    public function mazo() {
        # esta función servirá para crear nuevas barajas con diferentes palos.
        return $this->mazo;
    }
    public function mezcla() {
        if(!empty($this->mazo)) {
            shuffle($this->mazo);
        }
        else {
            $this->mazo;
            shuffle($this->mazo);
        }
        return $this->mazo;
    }
}

?>