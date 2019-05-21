<?php

namespace app\controllers;

use App\models\Products;
use Engine\Controller;


class ProductsController extends Controller
{
    public function index()
    {
        $product = new Products();
        $all = $product->findAll();
        $this->view->render('products/index', [
            'products' => $all
        ]);
    }
    
    public function insert()
    {
        $product = new Products();
        //$product->delete(3);
        $product->insert([
            'title' => 'Apple Iphone',
            'description' => 'sdfsdf'
        ]);
        
    }
    
//    $request = new Request();
//    $params = $request->getAllParams(); получать и гет и пост параметры
//    $param = $request->getParam('name');
//
//    if($request->getMethod() == POST) {
//    
//    делаем insert
//    }
}