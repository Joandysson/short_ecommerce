<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Config\Router\Router;

/**
 * class ProductController
 * @package category
 * App\Controllers
 */
class ProductController
{
    /**
     * @var Category $category
     */
    private Category $category;

    /**
     * @var Product $product
     */
    private Product $product;

    /**
     * @var ProductCategory $productCategory
     */
    private ProductCategory $productCategory;

    public function __construct(
    ) {
        $this->category = new Category();
        $this->product = new Product();
        $this->productCategory = new ProductCategory();
    }

    /**
     * @return void
     */
    public function index()
    {
        $products = $this->product->all();

        for ($i = 0; $i < count($products); $i++) {
            $categories = $this->productCategory->byProductId($products[$i]['id']);
            $products[$i]['categories'] = $categories;
        }

        view('products', [
            'products' => $products
        ]);
    }

    /**
     * @return void
     */
    public function create()
    {
        $categories = $this->category->all();

        view(
            'formProduct',
            [
                'categories' => $categories
            ]
        );
    }

    /**
     * @param array $request
     * @return void
     */
    public function store(array $request)
    {
        $categories = $request['categories'];
        unset($request['categories']);

        $product = $this->product->create($request);

        $this->productCategory->createCategoriesByProduct($categories, $product['id']);

        return Router::redirect('/products');
    }

    /**
     * @param array $request
     * @return void
     */
    public function edit(array $request)
    {
        if (!is_numeric($request['id'])) return Router::redirectBack();

        $product = $this->product->byId($request['id']);
        $product['categories'] = $this->productCategory->byProductId($product['id']);
        $categories = $this->category->all();

        for ($i = 0; $i < count($categories); $i++) {
            foreach ($product['categories'] as $prodCategory) {
                if ($categories[$i]['id'] == $prodCategory['id']) {
                    $categories[$i]['isProd'] = true;
                }
            }
        }

        view(
            'formProduct',
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }

    /**
     * @param array $request
     * @return void
     */
    public function update(array $request)
    {
        $categories = $request['categories'];
        $id = $request['id'];
        unset($request['categories']);
        unset($request['id']);

        $this->product->update($request, $id);
        $this->productCategory->deleteByProduct($id);

        $this->productCategory->createCategoriesByProduct($categories, $id);

        return Router::redirect('/products');
    }


    /**
     * @param [type] $request
     * @return void
     */
    public function delete(array $request)
    {
        if (!is_numeric($request['id'])) return Router::redirectBack();

        $this->productCategory->deleteByProduct($request['id']);
        $this->product->delete($request['id']);

        return Router::redirect('/products');
    }
}
