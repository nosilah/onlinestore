<?php


// include_once ROOT.'/models/Category.php';
// include_once ROOT.'/models/Product.php';
// include_once ROOT.'/components/Pagination.php';




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

    public function actionCategory($categoryId, $page = 1)
    {
      

        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductListByCategory($categoryId, $page);

        $total = Product::getTotalProductInCategory($categoryId);

        //create new object Pagination to create navigation 
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        
        require_once(ROOT. '/views/catalog/category.php');

        return true;
    }
}