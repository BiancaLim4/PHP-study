<?php
require_once 'ContaBanco.php';

// tipos permitidos
$cc = "CC";
$cp = "CP";

$conta1 = new ContaBanco();


$conta1->setNumConta(1234);
$conta1->setTitular("Bianca");
$conta1->setTipo($cc, $cc, $cp);


$conta1->abrirConta($cc);


$conta1->depositar(200);
$conta1->sacar(50);
$conta1->pagarMensalidade($cc, $cp);


echo "<hr>";
echo "Número da conta: " . $conta1->getNumConta() . "<br>";
echo "Titular: " . $conta1->getTitular() . "<br>";
echo "Tipo: " . $conta1->getTipo() . "<br>";
echo "Saldo final: R$ " . $conta1->getSaldo() . "<br>";


$conta1->fecharConta();
?>
