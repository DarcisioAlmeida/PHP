<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Tecnico.php';
                require_once 'Professor.php';
                
                //$p1 = new Pessoa(); nao pode virar objeto pois é uma classe abstrata
                /*
                // classe herdada de pessoa = herança pobre não herda nada //
                    $v1 = new Visitante();
                    $v1->setNome('Juvenal');
                    $v1->setIdade(33);
                    $v1->setSexo('M');
                print_r($v1);

                // classe herdada de pessoa + classe aluno = herança para diferença herda e tem diferença em relação a classe  mae //
                    $a1 = New Aluno();
                    $a1->setNome('Pedro');
                    $a1->setMatricula(1111);
                    $a1->setSexo('M');
                    $a1->setIdade(16);
                    $a1->setCurso('Informática');
                print_r($a1);
                */
                $a1 = new Professor();
                
                $a1->setNome('Pedro');
                $a1->setSalario(1111);
                $a1->setSexo('M');
                $a1->setIdade(16);
                $a1->setEspecialidade('Informática');
                $a1->receberAumento(2);
                                
                print_r($a1);
                
                $b1 = new Tecnico();
                
                $b1->setMatricula(1112);
                $b1->setNome('Jubileu');
                $b1->setRegistroProfissional(12);
                $b1->setCurso('Administração');
                $b1->setIdade(17);
                $b1->pagarMensalidade();
                
                print_r($b1);
            ?>
        </pre>
    </body>
</html>
