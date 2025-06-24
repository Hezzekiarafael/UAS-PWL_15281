<?php

namespace App\Controllers;

class allProdukController extends BaseController
{
    public function index(): string
    {
        return view('allProduk');
    }
}
