<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryRequest\DeleteCategoryRequest;
use App\Http\Requests\ProductCategoryRequest\PostCategoryRequest;
use App\Http\Requests\ProductCategoryRequest\UpdateCategoryRequest;
use App\Services\ProductCategoryService;

class ProductCategoryController extends Controller
{
    protected $productCategoryService;

    public function __construct(ProductCategoryService $productCategoryService)
    {
        $this->productCategoryService = $productCategoryService;
    }

    public function kategoriForm()
    {
        return view('product.form_kategori');
    }

    public function editCategory($id)
    {
        try {
            $data = $this->productCategoryService->getCategoryById($id);

            return view('product.edit_kategori', $data);
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function postCategory(PostCategoryRequest $request)
    {
        try {
            $this->productCategoryService->postCategory($request);

            return redirect('product')->with('success', 'Category added successfully');
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function updateCategory(UpdateCategoryRequest $request, $category_id)
    {
        try {
            $this->productCategoryService->updateCategory($request, $category_id);

            return redirect('product')->with('success', 'Category successfully changed');
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }

    public function deleteCategory(DeleteCategoryRequest $request)
    {
        try {
            $this->productCategoryService->deleteCategory($request->id);

            return redirect('product')->with('success', 'Category successfully deleted');
        } catch (Exception $e) {
            return $this->handleException($e);
        }
    }
}
