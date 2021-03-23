<?php
return [
    'product/([1-9]+)' => 'product/view/$i',//actionView in ProductCotroller

    'catalog' => 'catalog/index', //actionIndex in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController

    '' => 'site/index', //actionIndex in SiteController
];