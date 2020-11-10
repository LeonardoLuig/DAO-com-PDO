<?php

    class Usuarios implements InterfaceUser
    {
        private $id;
        private $nome;
        private $email;

        public function __get($atribute)
        {
            return $this->$atribute;
        }

        public function __set($atribute, $value)
        {
            $this->$atribute = $value;
        }

        public function all()
        {
            $registros = new BancoDados();
            return $registros->selectAll();
        }
        public function one($id)
        {
            $registro = new BancoDados();
            return $registro->selectOne($id);
        }

        public function update()
        {
            $update = new BancoDados();
            return $update->update();
        }

    }

?>