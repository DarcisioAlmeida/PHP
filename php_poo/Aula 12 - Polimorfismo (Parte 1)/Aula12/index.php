<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo de Sobreposição</title>
        <p>Mesma Assinaturas</p>
        <p>Classes Diferentes</p>
        
    </head>
    <body>
        <pre>
            <h1>Polimorfismo de Sobreposição</h1>
            <?php
                require_once 'Mamifero.php';
                require_once 'Reptil.php';
                require_once 'Peixe.php';
                require_once 'Ave.php';
                require_once 'Canguru.php';
                require_once 'Cachorro.php';
                require_once 'Cobra.php';
                require_once 'Tartaruga.php';
                require_once 'GoldFish.php';
                require_once 'Arara.php';
                
                $m = new Mamifero();
                $a = new Ave();
                $r = new Reptil();
                
                $c = new Canguru();
                $k = new Cachorro();
                $t = new Tartaruga();
                
                $m->emitirSom();
                $m->setPeso(33.5);
                $k->enterrarOsso(); 
                $k->abanarRabo(); 
                $k->emitirSom();
                $c->usarBolsa();
                $c->locomover();
                $a->locomover();
                $r->locomover();
                $t->alimentar();
            ?>
        </pre>
        <?php
            /* Exemplo: mesmo metodo com diferentes resultados - Polimorfismo
                // Programa Principal
                $n = new Animal(); - erro classe abstrata
                $m = new Mamifero();
                $r = new Reptil();
                $p = new Peixe();
                $a = new Ave()

                m->setPeso(85.3)
                m->setIdade(2)
                m->setMembros(4)
                m->locomover() // correndo
                m->alimentar() // Mamando
                m->emitirSon() // Som mamifero

                p->setPeso(0.35)
                p->setIdade(1)
                p->setMembros(0)
                p->locomover() // nadando
                p->alimentar() // comendo substancias
                p->emitirSon() // Peixe nao faz som
                p->soltarBolha()
            */
        ?>
    </body>
</html>
