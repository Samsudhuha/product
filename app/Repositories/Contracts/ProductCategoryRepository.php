<?php

namespace App\Repositories\Contracts;

interface ProductCategoryRepository
{
    public function getCategoryAll();
    public function postCategory($data);
    public function getCategoryById($id);
    public function updateCategory($data, $id);
    public function deleteCategory($id);
}
