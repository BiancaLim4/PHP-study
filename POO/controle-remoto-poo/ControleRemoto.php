<?php

require_once "Controller.php";

class ControleRemoto implements Controller {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function setVolume($volume) {
        if ($volume >= 0 && $volume <= 100) {
            $this->volume = $volume;
        }
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
        echo "Controle ligado!<br>";
    }

    public function desligar() {
        $this->setLigado(false);
        $this->setTocando(false);
        echo "Controle desligado!<br>";
    }

    public function abrirMenu() {
        if ($this->getLigado()) {
            echo "---------MENU--------<br>";
            echo "Ligado: " . ($this->getLigado() ? "SIM" : "NÃO") . "<br>";
            echo "Tocando: " . ($this->getTocando() ? "SIM" : "NÃO") . "<br>";
            echo "Volume: {$this->getVolume()}<br>";
        } else {
            echo "ERRO! Não posso abrir o menu.<br>";
        }
    }

    public function fecharMenu() {
        echo "Fechando menu.<br>";
    }

    public function aumentarVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function baixarVolume() {
        if ($this->getLigado() && $this->getVolume() >= 5) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ativarMudo() {
        if ($this->getLigado()) {
            $this->setVolume(0);
        }
    }

    public function desativarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if ($this->getLigado() && !$this->getTocando() && $this->getVolume() > 0) {
            $this->setTocando(true);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}

?>
