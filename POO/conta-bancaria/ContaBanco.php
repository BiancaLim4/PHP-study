<?php
    class ContaBanco {
        private $numConta;
        private $tipo;
        private $titular;
        private $saldo;
        private $status;


    public function __construct() {
        $this->status = false;
        $this->saldo = 0;
    }
    

    public function getNumConta() {
        return $this->numConta;
    }
    
    public function setNumConta($numeroInformado) {
        if (is_int($numeroInformado) && $numeroInformado > 1000) {
            $this->numConta = $numeroInformado;
            echo "Número da conta registrado com sucesso. <br>";
        } else {
            echo "Formato inválido. Tente novamente <br>";
        }
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipoInformado, $cc, $cp){
        if ($tipoInformado == $cc || $tipoInformado == $cp) {
            $this->tipo = $tipoInformado;
            echo "Tipo registrado com sucesso.<br>";
        }
    }


    public function getTitular() {
        return $this->titular;
    }

    public function setTitular ($titularInformado) {
        if(is_string($titularInformado) && $titularInformado !== "") {
            $this->titular = $titularInformado;
            echo "Titular da conta registrado com sucesso. <br>";
        }  else {
            echo "Verifique os dados e tente novamente. <br>";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }

// ---------- MÉTODOS ----------

    public function abrirConta($cc) {
        if ($this->status == false) {
            $this->status = true;
            if ($this->tipo == $cc ) {
                $this->saldo = 50;
                echo "Conta criada com sucesso! Por se tratar de uma conta corrente, você inicia com um bônus de R$50,00! <br>";
            } else {
                $this->saldo = 150;
                echo "Conta criada com sucesso! Por se tratar de uma conta poupança, você inicia com um bônus de R$150,00! <br>";
            } 
        } 
    }

    public function fecharConta () {
        if($this->saldo < 0) {
            echo "Conta com débito.<br>";
        } elseif ($this->saldo > 0) {
            echo "Conta com saldo. Saque antes de fechar.<br>";
        } else {
            $this->status = false;
            echo "Conta encerrada com sucesso. <br>";
        }
    }

    public function depositar($valor) {
        if ($this->status == true && $valor > 0) {
            $this->saldo += $valor;
            echo "Depósito realizado com sucesso. <br>";
        } 
    }

    public function sacar($valor) {
        if($this->status == true && $this->saldo > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso. <br>";
        }
    }

    public function pagarMensalidade ($cc, $cp) {
        if ($this->status == true) {
            if ($this->tipo == $cc) {
                $this->saldo -= 12;
            } elseif ($this->tipo == $cp) {
                $this->saldo -= 20;
            }
        }
    }
}
?>
