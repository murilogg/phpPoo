<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>YOUTUBE</title>
    </head>
    <body>
        <h1>CLASSE VIDEO</h1>
        <pre>
            <?php
            require_once './Video.php';
            require_once './Gafanhoto.php';
            require_once './Visualizacao.php';
            
            $v[0] = new Video("AULA 1 POO");
            $v[1] = new Video("AULA 2 POO");
            $v[2] = new Video("AULA 3 POO");
            
            $g[0] = new Gafanhoto("MURILO", 21, "M", "MURAGG");
            
            $vis[0]= new Visualizacao($g[0], $v[0]);
            $vis[1]= new Visualizacao($g[0], $v[1]);
            
            //print_r($g[0]);
            print_r($vis[0]);
            print_r($vis[1]);
            
            
            ?>
        </pre>
    </body>
</html>
