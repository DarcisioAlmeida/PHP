<?php
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        
        // final não pode ser sobreposta
        public final function fazerAniversario(){
            $this->idade ++;
        }
        
        //Métodos Especiais
        function getNome() {
            return $this->nome;
        }
        function getIdade() {
            return $this->idade;
        }
        function getSexo() {
            return $this->sexo;
        }
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setIdade($idade) {
            $this->idade = $idade;
        }
        function setSexo($sexo) {
            $this->sexo = $sexo;
        }
    }
?>