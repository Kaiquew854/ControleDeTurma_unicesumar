<?php
	class Turma{
		public $nomeTurma;
		private $alunosTurma=array();
		public $mediaTurma;

        function __construct($nomeTurma){
            
            $this->nomeTurma=$nomeTurma;
            echo 'Turma <b>'.$this->nomeTurma. ' </b>Criada <br><br>';
            
        }

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
            
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        public function addAlunoTurma($aluno){              
            $this->alunosTurma[] = $aluno;
        }

				public function getMediaTurma(){
				return $this -> mediaTurma = (  $this-> alunosTurma[0]->getMedia()+ 
                                                $this->alunosTurma[1]->getMedia()+ 
                                                $this->alunosTurma[2]->getMedia()+
                                                $this->alunosTurma[3]->getMedia()+ 
                                                $this->alunosTurma[4]->getMedia())/5;
				}        
	}
