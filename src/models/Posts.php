<?php

class Post extends Model{
    protected static $tableName = 'post';
    protected static $columns = ['post_id', 'titulo', 'texto', 'link'];
}

?>