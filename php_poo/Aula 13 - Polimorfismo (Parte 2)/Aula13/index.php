<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo de Sobrecarga</title>
    </head>
    <body>
        <h1>Polimorfismo de Sobrecarga </h1>
        <h2>Atenção: PHP não suporta Polimorfismo de sobregcarga</h2>
        <p>Assinaturas diferentes</p>
        <p>Classe é a mesma</p>

        <pre>
            <?php
                require_once 'Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';
                $c = new Cachorro();
                
                $c->reagirDono('true'); 
                $c->reagirIdadePeso(2, 12.5);
                $c->reagirIdadePeso(17, 4.5);
                $c->reagirHora(21, 00); 
                $c->reagirFrase('Vai Apanhar');
            ?>
        </pre>

        <?php
            /* Exemplos: 
                require_once 'Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';
                
                $c = new Cachorro();
                
                // $c->reagir - soment eo reagir o PHP não aceitaria por isso nome aos metodos //
                $c->reagirFrase('Olá'); // abanar e latir
                $c->reagirFrase('Vai Apanhar'); // rosnar
                $c->reagirHora(11, 45); // Abanar
                $c->reagirHora(21, 00); // ignorar
                $c->reagirDono('true'); // abanar
                $c->reagirDono('false'); // rosnar e latir
                $c->reagirIdadePeso(2, 12.5); // latir
                $c->reagirIdadePeso(17, 4.5); // rosnar
            */
        ?>
        
    </body>
    
</html>
