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
        $ni = "    Darcisio Pereira da Luz Dias     ";
        $leni = strlen($ni);
        print "$ni tem $leni caracteres <br/>";
        $nf = ltrim($ni);
        $lenf = strlen($nf);
        print "$nf tem $lenf caracteres";
    ?>
</div>
</body>
</html>
 