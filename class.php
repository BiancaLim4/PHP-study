<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
    class Caneta {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

    function rabiscar() {
       if($this->tampada == true) {
        echo "Erro! Não posso rabiscar assim.";
    } else{
        echo "Já estou rabiscando!";
    }
    }

    function tampar() {
        $this->tampada = true; 
    }

    function destampar(){
        $this->tampada = false;
    }
}
?>
</body>
</html>