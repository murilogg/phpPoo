<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>NUVEM</title>
    </head>
    <body>
        <h1>METEOROLOGIA</h1>
        <pre>
            <?php
            require_once './Chuva.php';
            
            $chuva = new Chuva(70);
            
            $chuva->cor();
            $chuva->chuva();
            
            
            ?>
        </pre>
    </body>
</html>
