<?php

namespace App\Controllers;
use App\Models\ProductModel;

class allProdukController extends BaseController
{
      protected $product; 

      function __construct()
    {
        $this->product = new ProductModel();
    }
    public function index(): string
    {
        helper('number');
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('allProduk', $data);
    }
}
