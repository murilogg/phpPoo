<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ANIMAL</title>
    </head>
    <body>
        <h1>CLASSE ANIMAL</h1>
        <pre>
            <?php
            require_once './Mamifero.php';
            require_once './Reptil.php';
            require_once './Peixe.php';
            require_once './Ave.php';
            require_once './Cachorro.php';
            require_once './Lobo.php';
            
            $m = new Mamifero();
            $r = new Reptil();
            $x = new Peixe();
            $a = new Ave();
            $k = new Cachorro();
            $lobo = new Lobo();
            
            /*$m->setPeso(70);
            $m->setMenbros(4);
            $m->setIdade(2);
            $m->setCorPelo("CINZA");
            $m->alimentar();
            $m->emitirSom();
            $m->locomover();
            
            $a->setPeso(0.33);
            $a->setIdade(1);
            $a->setMenbros(2);
            $a->setCorPena("MARON");
            $a->alimentar();
            $a->emitirSom();
            $a->fazerNinho();
            $a->locomover();
            
            $k->setPeso(12);
            $k->setIdade(3);
            $k->setMenbros(4);
            $k->setCorPelo("marron");
            $k->emitirSom();
            $k->alimentar();*/
            
            $lobo->emitirSom();
            $k->emitirSom();
            
            //print_r($m);
            
            ?>
        </pre>
    </body>
</html>
