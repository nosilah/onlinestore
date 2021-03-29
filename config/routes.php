<?php
return [
    'product/([1-9]+)' => 'product/view/$1',//actionView in ProductCotroller

    'catalog' => 'catalog/index', //actionIndex in CatalogController

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //ation category in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController

    'user/register' => 'user/register',

    '' => 'site/index', //actionIndex in SiteController
];