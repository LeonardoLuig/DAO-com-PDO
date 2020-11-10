<?php

    require_once("../model/config.php");

    $cadastrar = new Cadastro();
    $cadastrar->__set('nome', 'Ola');
    $cadastrar->__set('email', 'example@gmail.com');
    echo $cadastrar;

?>