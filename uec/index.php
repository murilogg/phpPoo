<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>COMBAT</title>
    </head>
    <body>
        <h1>ULTRA EMOJI COMBAT</h1>
        <pre>
            <?php
            require_once './Lutador.php';
            
            $l = array();
            
            $l[0] = new Lutador("Murilo","brasil","21",1.65,82,1,0,0);
            $l[0]->apresentar();
            $l[0]->status();
            
            ?>
        </pre>
    </body>
</html>
