<?php

namespace App\Controllers;

use App\Models\Category;
use App\Config\Router\Router;

/**
 * class CategoryController
 * @package App\Controllers
 */
class CategoryController
{

    /**
     * @var Category $category
     */
    private Category $category;

    public function __construct(
    ) {
        $this->category = new Category();
    }

    /**
     * @return void
     */
    public function index()
    {
        $categories = $this->category->all();
        view(
            'categories',
            ['categories' => $categories]
        );
    }

    /**
     * @return void
     */
    public function create()
    {
        view('formCategory');
    }

    /**
     * @param array $request
     * @return void
     */
    public function store(array $request)
    {
        $this->category->create($request);

        Router::redirect('/categories');
    }

    /**
     * @param array $request
     * @return void
     */
    public function edit(array $request)
    {
        if (!is_numeric($request['id'])) return Router::redirectBack();

        $category = $this->category->byId($request['id']);
        view('formCategory', ['category' => $category]);
    }

    /**
     * @param array $request
     * @return void
     */
    public function update(array $request)
    {
        $id = $request['id'];
        unset($request['id']);

        $this->category->update($request, $id);

        return Router::redirect('/categories');
    }

    /**
     * @param array $request
     * @return void
     */
    public function delete(array $request)
    {
        if (!is_numeric($request['id'])) return Router::redirectBack();

        $this->category->delete($request['id']);

        Router::redirectBack();
    }
}
