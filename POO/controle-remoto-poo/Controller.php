<?php

interface Controller {
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function aumentarVolume();
    public function baixarVolume();
    public function ativarMudo();
    public function desativarMudo();
    public function play();
    public function pause();
}

?>
