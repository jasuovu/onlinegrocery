<?php

/**
 * main controller class
 */

class Controller{
    public function view($view, $data = [])
    {

        extract($data); // extract the data array into variables

        $filename = "../app/views/".$view.".view.php";
        if(file_exists($filename))
        {
            require $filename; // if the file exists, require it
        } else {
            echo "View does not exist"; // if the file does not exist, echo this
        }
    }
}