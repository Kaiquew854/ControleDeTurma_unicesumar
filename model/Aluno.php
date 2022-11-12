<?php
    class Aluno {
        
        private $nome;
        private $ra;
        private $nota1;
        private $nota2;
        private $nota3;
        private $nota4;

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
            
        }
        function __get($atributo)
        {
            return $this->$atributo;
        }
        
        function __construct(){
            
        }

        function getMedia(){
            return ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4)/4 ;

        }


    }



?>
