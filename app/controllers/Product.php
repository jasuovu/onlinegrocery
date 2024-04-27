<?php

class Product extends Controller{
    public function index()
    {

        $data['title'] = "Product";
        $this->view('product', $data);
    }
}