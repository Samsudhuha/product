<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest\DeleteProductRequest;
use App\Http\Requests\ProductRequest\PostProductRequest;
use App\Http\Requests\ProductRequest\UpdateProductRequest;
use App\Services\ProductCategoryService;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productCategoryService;
    protected $productService;

    public function __construct(ProductCategoryService $productCategoryService, ProductService $productService)
    {
        $this->productCategoryService = $productCategoryService;
        $this->productService = $productService;
    }

    public function manageProduct()
    {
        try {
            $data['categories'] = $this->productCategoryService->getCategoryAll();
            $data['products'] = $this->productService->getProductAll();

            return view('product.index', $data);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function formProduct()
    {
        try {
            $data['categories'] = $this->productCategoryService->getCategoryAll();

            return view('product.form_product',$data);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function postProduct(PostProductRequest $request)
    {
        try {
            $this->productService->postProduct($request);

            return redirect('product')->with('success', 'Product added successfully');
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function editProduct($id)
    {
        try {
            $data['product'] = $this->productService->getProductById($id);
            $data['categories'] = $this->productCategoryService->getCategoryAll();

            return view('product.edit_product', $data);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function updateProduct(UpdateProductRequest $request, $product_id)
    {
        try {
            $this->productService->updateProduct($request, $product_id);

            return redirect('product')->with('success', 'Product successfully changed');
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }


    public function deleteProduct(DeleteProductRequest $request)
    {
        try {
            $this->productService->deleteProduct($request->id);

            return redirect('product')->with('success', 'Product successfully deleted');
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }
}
