<?php

    class Aluno{
        private $matricula;
        private $nome;
        private $prova1;
        private $prova2;
        private $trabalho;

        public function showmat(){
            return $this->matricula;
            
        }
        public function setmat($matriculan){
            $this->matricula = $matriculan;
            
        }
        public function shownome(){
            return $this->nome;
            
        }
        public function setnome($nomen){
            $this->nome = $nomen;
            
        }
        public function shownota1(){
            return $this->prova1;
            
        }

        public function setnota1($nota1n){
            $this->prova1 = $nota1n;
            
        }
        public function shownota2(){
            return $this->prova2;
            
        }

        public function setnota2($nota2n){
            $this->prova2 = $nota2n;
            
        }

        public function showtrabalho(){
            return $this->trabalho;
            
        }
        public function settrabalho($trabalhon){
            $this->trabalho = $trabalhon;
            
        }

        /* Criação do If */

        public function verificamedia(){
            $primprova = $this->prova1;
            $segundprova = $this->prova2;
            $licao = $this->trabalho;

            $final = ($primprova * 3.5) + ($segundprova * 3.5) + ($licao * 3.0);
            if($final >= 70){
                echo "Meus parabéns, você foi APROVADO!";
            } else {
                echo "Que pena, você foi REPROVADO!";
            }
        }
    }

?>