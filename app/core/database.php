<?php

class Database
{
    private function connect(){ // create a connection to the database
        $str = DBDRIVER.":hostname=".DBHOST.";dbname=".DBNAME;
        return new PDO($str,DBUSER,DBPASS);
    }

    public function query($query,$data = [],$type = 'object'){
        $con = $this->connect();

        $stm = $con->prepare($query); // create a statement to prepare the query
        if($stm){
            $check = $stm->execute(); // execute the query
            if($check){
                if($type != 'object'){
                    $type = PDO::FETCH_ASSOC; // fetch an array instead of an object
                } else{
                    $type = PDO::FETCH_OBJ; // fetch an object
                }
                $result = $stm->fetchAll($type);

                if(is_array($result) && count($result) > 0){ // if the result is an array and has more than 0 items
                    return $result;
                }
            }
        }

        return false;
    }

    public function create_table(){
        // products table
        $query = " CREATE TABLE IF NOT EXISTS `products` (
            `product_id` int(10) unsigned DEFAULT NULL,
            `product_name` varchar(20) DEFAULT NULL,
            `unit_price` float(8,2) DEFAULT NULL,
            `unit_quantity` varchar(15) DEFAULT NULL,
            `in_stock` int(10) unsigned DEFAULT NULL
           ) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci
           ";

        $this->query($query);
    }
}