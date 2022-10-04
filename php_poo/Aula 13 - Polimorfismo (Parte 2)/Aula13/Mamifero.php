<?php
    require_once 'Animal.php';
    class Mamifero extends Animal {
        protected $corPelo;

        //Métodos Abstratos (Sobreposição)
        public function emitirSom() {
            echo "<p>Som de Mamífero</p>";
        }
    }
?>