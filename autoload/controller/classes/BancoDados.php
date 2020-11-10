<?php

    class BancoDados implements MySQL
    {
        private $conn;
        private $users = array();

        // public function __construct(PDO $conn)
        // {
        //     $this->conn = $conn;
        // }

        public function insert(){
            return 'inserido com sucesso';
        }

        public function selectAll()
        {
            $usuarios = $this->users = array(
                array('id'=>1, 'nome'=>'Leonardo', 'email'=>'leonardo.luigi.belloni@gmail.com'),
                array('id'=>2, 'nome'=>'Ricardo', 'email'=>'ricardo@gmail.com'),
                array('id'=>3, 'nome'=>'teste', 'email'=>'teste@gmail.com'),
            );
            return $usuarios;
        }

        public function selectOne($id)
        {
            $one = $this->selectAll();
            $indice = $id - 1;
            $user =  array_values($one[$indice]);
            if($user != null){
                echo json_encode(array(
                    "ID:"=>$user[0],
                    "Nome"=>$user[1],
                    "Email"=>$user[2]
                ));
            }else{
                echo "Usuário não encontrado!";
            }
        }

        public function update()
        {
            echo "Usuário atualizado com sucesso";
        }

        public function delete()
        {
            echo "Usuário deletado com sucesso";
        }
    }

?>