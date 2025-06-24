<?php
namespace App\Controllers;
use App\Models\ProductModel;
class AdminController extends BaseController
{
    protected $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('admin', $data);
    }
}