<?php

namespace App\Http\Controllers;

use App\Services\ProductCategoryService;
use App\Services\ProductService;

class DashboardController extends Controller
{
    protected $productCategoryService;
    protected $productService;

    public function __construct(ProductCategoryService $productCategoryService, ProductService $productService)
    {
        $this->productCategoryService = $productCategoryService;
        $this->productService = $productService;
    }


    public function dashboard()
    {
        try {
            $data['categories'] = $this->productCategoryService->getCategoryAll();

            return view('dashboard.index', $data);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function getProduct($category_id)
    {
        try {
            $data['products'] = $this->productService->getProductByCategoryId($category_id);
            $data['category'] = $this->productCategoryService->getCategoryById($category_id);

            return view('dashboard.product', $data);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }
}
