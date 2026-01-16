
<?php 
    class Caneta {

        private $modelo;
        private $ponta;
        private $cor;
        private $tampada;

        public function __construct() { 
            $this-> setCor("Rosa");
            $this->tampar();
        }
      
//----------MÉTODOS----------
        public function tampar() {
            if (!$this->tampada) {
                $this->tampada = true;
            } 
        }

        public function destampar() {
            if ($this->tampada) {
                $this->tampada = false;
            } 
        }

        public function rabiscar() {
            if ($this->tampada == true) {
                echo "Não posso rabiscar, estou tampada. <br>";
            } else {
                echo "Estou rabiscando! <br>";
            }
        }


//----------GETTERS/SETTERS----------
        public function getModelo () {
            return $this->modelo;
        }

        public function setModelo($m) {
             if (is_string($m) && $m !== "") {
                $this->modelo = $m;
            } else {
                echo "Modelo inválido.<br>";
            }
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            if (is_numeric($p) && $p > 0 && $p <= 3) {
                $this->ponta = $p;
            } else {
            echo "Ponta inválida.<br>";
            } 
        }

        public function getCor () {
            return $this->cor;
        }

        public function setCor ($c) {
            if (is_string($c) && $c !== "") {
                $this->cor = $c;
            } else {
                echo "Cor inválida.<br>";
            }
        }
    }
?>
