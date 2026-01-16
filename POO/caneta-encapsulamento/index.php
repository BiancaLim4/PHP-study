<?php
    require_once 'class.php';

    $caneta1 = new Caneta();
    $caneta1->setModelo("BIC");
    $caneta1->setCor("Roxo");
    $caneta1->setPonta(0.5);

    $caneta1->destampar();
    $caneta1->rabiscar();
    echo "O modelo da caneta é {$caneta1->getModelo()} com cor {$caneta1->getCor()}. Essa possui a numeração de ponta {$caneta1->getPonta()}.";
?>
