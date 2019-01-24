<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PESSOAS</title>
    </head>
    <body>
        <h1>PROJETO PESSOA</h1>
        <pre>
            <?php
            require_once './Visitante.php';
            require_once './Aluno.php';
            require_once './Funcionario.php';
            require_once './Professor.php';
            
            $pe1 = new Visitante();
            $pe2 = new Aluno();
            $pe3 = new Funcionario();
            $pe4 = new Professor();
            
            $pe1->setNome("MURILO");
            $pe1->setIdade(24);
            $pe1->setSexo("M");
            $pe2->setNome("RONALDO");
            $pe3->setNome("BRENO");
            $pe4->setNome("RODRIGO");
            
        
            
           
            print_r($pe1);
            print_r($pe2);
            print_r($pe3);
            print_r($pe4);
            
            
            ?>
        </pre>
    </body>
</html>
