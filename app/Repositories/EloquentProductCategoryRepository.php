<?php

namespace App\Repositories;

use App\Models\ProductCategory;
use App\Repositories\Contracts\ProductCategoryRepository;

class EloquentProductCategoryRepository implements ProductCategoryRepository
{
    public function getCategoryAll()
    {
        return ProductCategory::all();
    }

    public function postCategory($data)
    {
        return ProductCategory::create($data);
    }

    public function getCategoryById($id)
    {
        return ProductCategory::where('id', $id)->first();
    }
    
    public function updateCategory($data, $id)
    {
        return ProductCategory::where('id', $id)->update($data);
    }
    
    public function deleteCategory($id)
    {
        return ProductCategory::where('id', $id)->delete();
    }
}
