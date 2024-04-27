<?php

/**
 * app info
 */

define('APP_NAME', 'Grocery Store');
define('APP_DESC', 'Browse and buy groceries online');

/**
 * database config
 */

if($_SERVER['SERVER_NAME'] == 'localhost'){
    //database config for local server
    define('HOSTNAME', 'localhost');
    define('DBNAME', 'grocery_db');
    define('DBUSER', 'root');
    define('DBUSER', '');
    define('DBDRIVER', 'mysql');

} else {
    //database config for live server
    //database config for local server
    define('HOSTNAME', 'localhost');
    define('DBNAME', 'grocery_db');
    define('DBUSER', 'root');
    define('DBUSER', '');
    define('DBDRIVER', 'mysql');
}