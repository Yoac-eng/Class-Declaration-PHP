<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes PHP</title>
</head>
<body>
    <?php

        require_once 'Classes.php';
        $vendedor1 = new Pessoa;
        $cliente1 = new Cliente;
        $carro1 = new Carro;
        $venda1 = new Venda;
        print_r($vendedor1);
        print_r($cliente1);
        print_r($carro1);
        print_r($venda1);

    ?>
</body>
</html>