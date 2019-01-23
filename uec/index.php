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
            require_once './Luta.php';
            require_once './Lutador.php';

            $l = array();

            $l[0] = new Lutador("Murilo", "Brasil", 21, 1.65, 62, 10, 0, 1);
            $l[1] = new Lutador("Dead", "Brasil", 25, 1.85, 70.2, 10, 0, 1);
            $l[2] = new Lutador("Snap", "EUA", 39, 1.93, 81.9, 13, 0, 2);
            $l[3] = new Lutador("Nerdark", "Finlandia", 45, 1.81, 77, 7, 0, 3);
            $l[4] = new Lutador("Putscript", "França", 29, 1.75, 90, 14, 2, 3);
            $l[5] = new Lutador("Irineu", "Romenia", 33, 1.99, 102.9, 12, 4, 3);
            
            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[0], $l[1]);
            $UEC01->lutar();
            $l[0]->status();
            $l[1]->status();
            
            
            
            ?>
        </pre>
    </body>
</html>
