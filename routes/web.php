<?php

use App\Config\Router\Router;
use App\Config\Router\URL;

if(empty(URL::get(0))) {
    Router::redirect('/dashboard');
}

Router::get("/dashboard", 'DashboardController:index');

Router::get("/products", "ProductController:index");
Router::get("/product/{id}", "ProductController:edit");
Router::get("/addproduct", "ProductController:create");
Router::post("/addproduct", "ProductController:store");
Router::post("/updateproduct", "ProductController:update");
Router::get("/deleteproduct/{id}", "ProductController:delete");

Router::get("/categories", "CategoryController:index");
Router::get("/category/{id}", "CategoryController:edit");
Router::get("/addcategory", "CategoryController:create");
Router::post("/addcategory", "CategoryController:store");
Router::post("/updatecategory", "CategoryController:update");
Router::get("/deletecategory/{id}", "CategoryController:delete");

Router::run();

if (Router::error()) {
    view('404');
}
