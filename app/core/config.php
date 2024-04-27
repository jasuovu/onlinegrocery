<?php

/**
 * app info
 */

define('APP_NAME', 'Grocery Store');

/**
 * database config
 */

if($_SERVER['SERVER_NAME'] == 'localhost'){
    //database config for local server
    define('DBHOST', 'localhost');
    define('DBNAME', 'assignment1');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');

    //root path e.g. localhost/
    define('ROOT', 'http://localhost/onlinegrocery/public');

} else {
    //database config for live server
    //database config for local server
    define('HOSTNAME', 'localhost');
    define('DBNAME', 'assignment1');
    define('DBUSER', 'root');
    define('DBUSER', '');
    define('DBDRIVER', 'mysql');

    //root path e.g. aws...
    define('ROOT', 'https://');

}