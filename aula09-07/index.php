<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 09/07</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <pre>

        <?php
        function nome_funcao($par_1 = 0, $par_2 = "vazio")
        {
            echo "Código da Função <br>";
            return "Dado de Retorno: " . $par_1 . "/" . $par_2;
        }
        $retorno = nome_funcao();
        echo $retorno . "<br><br>";
        $retorno = nome_funcao(17, "AMOSTRADINHO");
        echo $retorno . "<br><br>";

        $retorno = nome_funcao(18, "CASCA DE BALA");
        echo $retorno . "<br><br>";

        $retorno = nome_funcao(19, "BORA BILL");
        echo $retorno . "<br><br>";

        ?> 
    </pre>

    <pre>
        <?php

        function multiplicacao($x1, $x2)
        {
            $mult = $x1 * $x2;
            return $mult;
        }

        echo multiplicacao(3, 4);

        ?>

    </pre>

    <pre>
        <?php
        function imprimer($numero){
            for ($i = 0; $i < $numero ; $i++) {
                echo " <script> alert ('digitex')</script>";
                
            }
        }
        imprimer(0);
    
        ?>
    </pre>





</body>

</html>