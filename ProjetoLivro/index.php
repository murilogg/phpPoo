<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>LIVRO</title>
    </head>
    <body>
        <h1>PROJETO LIVRO</h1>
        <pre>
            <?php
            require_once '../ProjetoLivro/Pessoa.php';
            require_once './Livro.php';

            $p1[0] = new Pessoa("MURILO", 21, "M");
            $p1[1] = new Pessoa("IRINEU", 48, "M");
            $p1[2] = new Pessoa("JULIA", 18, "F");
            $p1[3] = new Pessoa("RENATA", 24, "F");

            $li[0] = new Livro("PHP", "RONALDO", 500, $p1[0]);
            $li[1] = new Livro("PHP INICIANTE", "RONALDO", 100, $p1[1]);
            $li[2] = new Livro("PHP MEDIO", "FRANCO", 700, $p1[2]);
            $li[3] = new Livro("PHP AVANÇADO", "FERNANDO", 1500, $p1[3]);
            $li[4] = new Livro("HTML", "FERNANDO", 200, $p1[3]);
            
            
            $li[0]->folhear(498);
            $li[0]->avancarPag();
            $li[0]->avancarPag();
            $li[0]->avancarPag();
            $li[0]->avancarPag();
            $li[0]->detalhes();
            

            /*for($i = 0;$i < $cont = 5; $i++) {
                echo "LIVRO $i ";
                print_r($li[$i]);
            }*/
            ?>
        </pre>
    </body>
</html>
