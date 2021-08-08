<?php

namespace App\Controllers;

use App\Models\Product;

/**
 * class DashboardController
 *  @package App\Controllers
 */
class DashboardController
{
    /**
     * @param Product $product
     */
    private Product $product;

    public function __construct() {
        $this->product = new Product();
    }

    /**
     * @return void
     */
    public function index()
    {
        $products = $this->product->all();
        view(
            'dashboard',
            ['products' => $products]
        );
    }
}
