<?php

namespace App\Service;

use App\Models\Product;

class ProductService
{
    public function list(){
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return $products;
    }
}
