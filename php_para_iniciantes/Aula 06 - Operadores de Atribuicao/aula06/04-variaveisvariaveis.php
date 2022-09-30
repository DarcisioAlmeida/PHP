<!DOCTYPE html>
    <html>
    <head>
      <link rel="stylesheet" href="_css/estilo.css"/>
      <meta charset="UTF-8"/>
      <title>Variaveis de Referencia</title>
    </head>
    <body>
        <div>
            <?php
                $x = "abc";
                $$x = "def";
                echo "O conteúdo da variável X é $x";
                echo "<br/>A variável ABC recebeu o valor $abc";
            ?>
        </div>
    </body>
</html>
 