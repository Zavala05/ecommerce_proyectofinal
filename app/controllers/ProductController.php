<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\ProductModel;

class ProductController extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
    }

    public function index()
    {
        $products = $this->productModel->getProducts();
        $data = [
            'title' => 'Productos Tecnológicos',
            'products' => $products
        ];
        $this->view('products/index', $data);
    }

    public function show($id)
    {
        $product = $this->productModel->getProductById($id);
        $data = [
            'product' => $product
        ];
        $this->view('products/show', $data);
    }
}