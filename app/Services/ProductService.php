<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(
        ProductRepository $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    public function getProductAll()
    {
        return $this->productRepository->getProductAll();
    }

    public function postProduct($data)
    {
        $image = str_replace("public", "storage", $data->image->storeAs('public/images/product', $data->nama . '.' . $data->image->extension()));

        $data = [
            'nama' => $data->nama,
            'product_categories_id' => $data->product_categories_id,
            'image' => $image
        ];

        return $this->productRepository->postProduct($data);
    }
        
    public function getProductById($id)
    {
        return $this->productRepository->getProductById($id);
    }

    public function updateProduct($data, $product_id)
    {
        $image = str_replace("public", "storage", $data->image->storeAs('public/images/product', $data->name . '.' . $data->image->extension()));

        $data = [
            'nama' => $data->nama,
            'product_categories_id' => $data->product_categories_id,
            'image' => $image
        ];

        return $this->productRepository->updateProduct($data, $product_id);
    }

    public function deleteProduct($id)
    {
        return $this->productRepository->deleteProduct($id);
    }

    public function getProductByCategoryId($category_id)
    {
        return $this->productRepository->getProductByCategoryId($category_id);
    }
}
