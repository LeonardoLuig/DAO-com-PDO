<?php

    interface MySQL{

        public function insert();
        public function selectAll();
        public function selectOne($id);
        public function update();
        public function delete();

    }

?>