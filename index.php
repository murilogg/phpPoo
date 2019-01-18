<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CANETA</title>
    </head>
    <body>
        <pre>
            <?php
            require_once './ContaBanco.php';
            
            $cliente = new ContaBanco(123, "CC", "MURILO");
            $cliente->abrirConta("CP");
            
            print_r($cliente);
            ?>
        </pre>
    </body>
</html>
