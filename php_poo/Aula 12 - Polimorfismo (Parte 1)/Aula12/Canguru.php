<?php
    require_once 'Mamifero.php';
    class Canguru extends Mamifero {
        //Métodos Específicos
        public function usarBolsa(){
            echo "<p>Usando Bolsa</p>";
        }
        //Métodos Abstratos (sobreposição) ao metodo do Mamifero
        public function locomover(){
            echo "<p>Saltando</p>";
        }
    }
?>