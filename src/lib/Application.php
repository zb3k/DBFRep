<?php

namespace DbFrep;

class Application {

    protected $db;
    protected $dbName;

    public function __construct($username, $password, $engine, $dbConfig = [], $pdoOptions = []) {
        $dsn = $engine.':';
        foreach ($dbConfig as $key => $val) {
            $dsn .= $key.'='.$val.';';
        }
        $this->db = new PDO($dsn, $username, $password, $pdoOptions);
    }

    public function getTables() {
        return $this->arrayPluck($this->db->query('SHOW TABLES')->fetchAll(PDO::FETCH_NUM));
    }

    public function find($find) {
        $result = [];
        foreach ($this->getTables() as $table) {
            $result[$table] = $this->db->query("SHOW COLUMNS FROM {$table}")->fetchAll(PDO::FETCH_OBJ);
            break;
        }
        return $result;
    }

    public function arrayPluck($array, $column = 0) {
        return array_map(function($val) use ($column) {
            return $val[$column];
        }, $array);
    }

    public function queryResult($query) {
        $result = $this->db->query($query);
        while($record = $result->fetch(PDO::FETCH_OBJ)) {
            yield $record;
        }
    }
}
