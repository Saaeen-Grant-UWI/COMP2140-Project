<?php

define("APP_NAME", "GramacAuto");
define("APP_DESC", "Gramac Auto Services");
define("ROOT", "http://localhost/COMP2140-Project/public");

if($_SERVER["SERVER_NAME"] == 'localhost') {

    define("DBHOST",'localhost');
    define("DBNAME",'gramac_db');
    define("DBUSER",'root');
    define("DBPASS",'');
    define("DBDRIVER",'mysql');


} else {

    define("DBHOST",'localhost');
    define("DBNAME",'gramac_db');
    define("DBUSER",'root');
    define("DBPASS",'');
    define("DBDRIVER",'mysql');

}

?>