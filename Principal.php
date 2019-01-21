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
            
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setNumConta(1001);
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setNumConta(2001);
            
            $p1->deposito(300);
            $p2->deposito(500);
            
            $p2->sacar(650);    
            $p2->fecharConta();
            
            print_r($p1);
            print_r($p2);
            
            
            ?>
        </pre>
    </body>
</html>
