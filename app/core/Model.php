<?php

class Model extends Database {

    protected $table = "";
    public $allowedColumns = [];
  

    public function insert($data) {
                  
        foreach ($data as $key => $value) {
            if(!(in_array($key, $this->allowedColumns))) {
                unset($data[$key]);
            }
        }
    
        $keys = array_keys($data);
        $query = "insert into ".$this->table." (".implode(",",$keys).") values (:".implode(",:",$keys).")";
        
        $this->query($query, $data);
    }

    public function where($data) {

        $keys = array_keys($data);
        $query = "select * from ".$this->table." where " ;

        foreach($keys as $key) {
            $query .= $key."=:".$key." && ";    
        }
        
        $query = trim($query,"&& ");
        $result = $this->query($query, $data);
        
        if(is_array($result)) {
            return $result;
        } else {
            return false;
        }
    }

    public function where_all() {

        $query = "select * from ".$this->table;
        
        $query = trim($query,"&& ");
        $result = $this->query($query, []);
        
        if(is_array($result)) {
            return $result;
        } else {
            return false;
        }
    }

    public function first($data) {

        $keys = array_keys($data);
        $query = "select * from ".$this->table." where " ;

        foreach($keys as $key) {
            $query .= $key."=:".$key." && ";    
        }
        
        $query = trim($query,"&& ");
        $query .= " order by id desc limit 1";
        $result = $this->query($query, $data);
        
        if(is_array($result)) {
            return $result[0];

        } else {
            return false;
        }
    }

    public function last_row() {

        $query = "select * from ".$this->table." order by id desc limit 1";
        $result = $this->query($query, []);
        
        if(is_array($result)) {
            return $result[0];

        } else {
            return false;
        }
    }
}

?>