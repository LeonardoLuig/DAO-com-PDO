<?php

    class Cadastro extends Usuarios
    {

        public function validInsert()
        {
            $sql = new BancoDados();
            $registro = $sql->selectAll();
            $dataNome = array();
            $dataEmail = array();
            foreach($registro as $value){
                    $nome = $value['nome'];
                    $email = $value['email'];
                    array_push($dataNome, $nome);
                    array_push($dataEmail, $email);
            }
            if(in_array($this->nome, $dataNome) OR in_array($this->email, $dataEmail)){
                return "Usuário ja existente";
            }else{
                return $sql->insert();
            }
        }

        public function __toString()
        {
            return json_encode($this->all());
        }

    }

?>