<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CANETA</title>
    </head>
    <body>
        <?php
        require_once './Caneta.php';

        $caneta1 = new Caneta();
        $caneta1->cor = "azul";
        $caneta1->modelo = "BIC";
        
       

        $caneta1->tampar();
        $caneta1->rabiscar();

        echo "<br><br>";

        print_r($caneta1);
        ?>
    </body>
</html>
