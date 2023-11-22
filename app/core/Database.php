<?php

class Database {


    function __construct() {

    }

    private function connect() {

        $str = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        return new PDO($str, DBUSER, DBPASS);

    }

    public function query($query, $data = []) {

        $connection = $this->connect();
        $statement = $connection->prepare($query);
        if($statement) {

            $check = $statement->execute($data);
            if($check) {

               $result =  $statement->fetchAll(PDO::FETCH_OBJ);

               if(is_array($result) && count($result) > 0) {
                    return $result;
               }
            }
        }
        return false;

    }
}

?>