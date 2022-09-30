<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $name[0] = "Darcisio";
        $name[1] = "Almeida";
        $name[2] = "da";
        $name[3] = "Luz";
        $name[4] = "Dias";

        $nome = implode(" ",$name);
        print $nome;
    ?>
</div>
</body>
</html>
 