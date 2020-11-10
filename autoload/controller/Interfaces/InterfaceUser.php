<?php

    interface InterfaceUser
    {
        public function __get($atribute);
        public function __set($atribute, $value);
        public function all();
        public function one($id);
    }

?>