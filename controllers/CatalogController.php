<?php


include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';



class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProduct = [];
        $latestProduct = Product::getLatestProducts(10);
        
        require_once(ROOT. '/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductListByCategory($categoryId);
        
        require_once(ROOT. '/views/catalog/category.php');

        return true;
    }
}