<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepository;

class EloquentProductRepository implements ProductRepository
{
    public function getProductAll()
    {
        return Product::all();
    }

    public function postProduct($data)
    {
        return Product::create($data);
    }

    public function getProductById($id)
    {
        return Product::where('id', $id)->first();
    }
    
    public function getProductByCategoryId($id)
    {
        return Product::where('product_categories_id', $id)->get();
    }
    
    public function updateProduct($data, $id)
    {
        return Product::where('id', $id)->update($data);
    }
    
    public function deleteProduct($id)
    {
        return Product::where('id', $id)->delete();
    }
}
