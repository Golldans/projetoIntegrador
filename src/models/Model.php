<?php

class Model
{
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];

    function __construct($array)
    {
        $this->loadFromArray($array);
    }

    public function loadFromArray($array)
    {
        if ($array) {
            foreach ($array as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function __get($key)
    {
        return $this->values[$key];
    }

    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }

    //Função primária a ser chamada, usando dos parâmetros dados para gerar a query
    public static function get($filters = [], $columns = '*')
    {
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);
        if ($result) {

            $class = get_called_class();

            while ($row = $result->fetch_assoc()) {
                array_push($objects, new $class($row));
            }
        }

        return $objects;
    }

    public static function getOne($filters = [], $columns = '*')
    {
        $class = get_called_class();
        $result = static::getResultSetFromSelect($filters, $columns);

        return $result ? new $class($result->fetch_assoc()) : null;
    }

    //Cria o comando SQL a ser executado na query a partir dos parâmetros retornados pela função get()
    public static function getResultSetFromSelect($filters = [], $columns = '*')
    {
        $sql = "SELECT ${columns} FROM " . static::$tableName . static::getFilters($filters);

        $result = Database::getResultFromQuery($sql);
        if ($result->num_rows === 0) {
            return null;
        } else {
            return $result;
        }
    }

    private static function getFilters($filters)
    {
        $sql = '';

        if (count($filters) > 0) {
            $sql .= " WHERE 1 = 1";
            foreach ($filters as $column => $value) {
                $sql .= " AND ${column} = " . static::getFormatedValue($value);
            }
            $sql .= ';';
        }

        return $sql;
    }

    private static function getFormatedValue($value)
    {
        if (is_null($value)) {
            return 'null';
        } else if (is_string($value)) {
            return "'${value}'";
        } else {
            return $value;
        }
    }

    public function addUserId(){
        $id = (User::getOne(['email' => $this->email]));
        if($id){
            $connect = Database::getConnection();
            $stmt = $connect->prepare('SELECT user_id FROM users WHERE email = ?');
            $stmt->bind_param('s', $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            $id = $result->fetch_assoc();

            $stmt->close();
            return $id['user_id'];
        }  
    }

    public function insert_user(){
        $connect = Database::getConnection();
        $stmt = $connect->prepare('INSERT INTO users ( username, password, email) VALUES ( ?, ?, ?);');

        $stmt->bind_param('sss', $this->username, $this->password, $this->email);

        try{
            $stmt->execute();
        } catch(Exception $e){
            echo $e;
        }    

    }

}
