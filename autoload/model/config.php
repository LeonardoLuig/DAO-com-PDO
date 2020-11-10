<?php

    spl_autoload_register(function($nameClass){
//DIRETÓRIO E SUBDIRETÓRIOS
        $dir = "controller";
        $subDir = "Interfaces";
        $subDir2 = "classes";
//ARQUIVO COMPLETO PARA AUTOLOAD
        $fileName = "../".$dir.DIRECTORY_SEPARATOR.$nameClass.".php";
        $fileName2 = "../".$dir.DIRECTORY_SEPARATOR.$subDir.DIRECTORY_SEPARATOR.$nameClass.".php";
        $fileName3 = "../".$dir.DIRECTORY_SEPARATOR.$subDir2.DIRECTORY_SEPARATOR.$nameClass.".php";
//LÓGICA AUTOLOAD : ACESS TO DIRECTORIES AND FILES
        if(file_exists($fileName)){
            require_once($fileName);
        }else if(file_exists($fileName2)){
            require_once($fileName2);
        }else if(file_exists($fileName3)){
            require_once($fileName3);
        }else{
            throw new Exception("Arquivos não encontrados, impossivel continuar : erro enviado para os gerenciadores, resolveremos em breve!");
        }

    });

?>