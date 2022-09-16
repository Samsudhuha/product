<?php

namespace App\Repositories\Contracts;

interface ProductRepository
{
    public function getProductAll();
    public function postProduct($data);
    public function getProductById($id);
    public function getProductByCategoryId($category_id);
    public function updateProduct($data, $id);
    public function deleteProduct($id);
}
