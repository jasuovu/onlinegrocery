<?php

class App 
{
    protected $controller = '_404'; // default controller
    protected $method = 'index'; // default method


    function __construct() // PHP routing system
    {
        $arr = $this->getURL(); // get the url

        $filename = '../app/controllers/'.ucfirst($arr[0]).'.php'; // check if the controller file exists
        if(file_exists($filename)) // if the file exists, require it
        {
            require $filename;
            $this->controller = $arr[0];
            unset($arr[0]); // remove the controller from the array
        } else { // if the file does not exist, require the 404 file
            require '../app/controllers/'.$this->controller.'.php';
        }
        $mycontroller = new $this->controller(); // create new instance of controller
        $mymethod = $arr[1] ?? $this->method; // if method is not set, use default method (there will always be an index in every controller)  

        if(!empty($arr[1])) // if method is set
        {
            if(method_exists($mycontroller, $mymethod)) // check if the method exists
            { 
                $this->method = strtolower($mymethod); // set the method
                unset($arr[1]); // remove the method from the array
            }
        }

        $arr = array_values($arr); // reindex the array, cleaning up the aray so it starts at 0        
        call_user_func_array([$mycontroller, $this->method], $arr); // call the method
    }

    private function getURL() // get the url
    {
        $url = $_GET['url'] ?? 'home'; // if url is not set, use home
        $url = filter_var($url, FILTER_SANITIZE_URL); // sanitize the url, remove unwanted characters
        $arr = explode('/', $url); // explode the url, splits the $url string into an array using the forward slash (/) as the delimiter 
        return $arr; 
    }
}