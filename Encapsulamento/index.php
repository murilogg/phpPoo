<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CONTROLE</title>
    </head>
    <body>
        <h1>Controle Remoto</h1>
        <pre>
            <?php
            require_once './ControleRemoto.php';
            $c1 = new ControleRemoto();

            $c1->maisVolume();
            $c1->maisVolume();
            $c1->abrirMenu();
            $c1->ligar();
            $c1->maisVolume();
            $c1->abrirMenu();
            
            $c1->ligarMudo();
            $c1->abrirMenu();
            $c1->desligarMudo();
            $c1->abrirMenu();
            $c1->desligar();
            $c1->ligarMudo();
            $c1->abrirMenu();
            
            ?>
        </pre>
    </body>
</html>
