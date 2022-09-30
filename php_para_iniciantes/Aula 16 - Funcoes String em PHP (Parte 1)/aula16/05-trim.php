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
    $n_ini = "     Darcisio Mota de Almeida     ";
    $lenght_ini = strlen($n_ini);
    echo "$n_ini tem $lenght_ini caracteres <br/>";
    $n_fin = trim($n_ini);
    $lenght_fin = strlen($n_fin);
    echo "$n_fin tem $lenght_fin caracteres";
    ?>
</div>
</body>
</html>
 