<?php

namespace App\Services;

use App\Repositories\Contracts\ProductCategoryRepository;

class ProductCategoryService
{
    protected $productCategoryRepository;

    public function __construct(
        ProductCategoryRepository $productCategoryRepository
    ) {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    public function getCategoryAll()
    {
        return $this->productCategoryRepository->getCategoryAll();
    }
    
    public function postCategory($data)
    {
        $image = str_replace("public", "storage", $data->image->storeAs('public/images/category', $data->name . '.' . $data->image->extension()));

        $data = [
            'nama' => $data->name,
            'image' => $image
        ];

        return $this->productCategoryRepository->postCategory($data);
    }

    public function getCategoryById($id)
    {
        return $this->productCategoryRepository->getCategoryById($id);
    }

    public function updateCategory($data, $category_id)
    {
        $image = str_replace("public", "storage", $data->image->storeAs('public/images/category', $data->name . '.' . $data->image->extension()));

        $data = [
            'nama' => $data->name,
            'image' => $image
        ];

        return $this->productCategoryRepository->updateCategory($data, $category_id);
    }

    public function deleteCategory($id)
    {
        return $this->productCategoryRepository->deleteCategory($id);
    }
}
