<?php

loadModel('Posts');

class Dados extends Model{

    protected static $tableName = 'post';
    protected static $columns = ['post_id', 'titulo', 'texto', 'link'];

    public function generatePost($filters = [], $columns = '*'){
        $result = static::get($filters, $columns);

        return $result;

    }

}

?>