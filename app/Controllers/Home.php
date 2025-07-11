<?php

namespace App\Controllers;

use App\Database\Migrations\Product;
use App\Models\ProductModel;

class Home extends BaseController
{
    protected $product;
    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
    }
    public function index(): string
    {   
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('home',$data);
    }
}
