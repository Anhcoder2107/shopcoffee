<?php 

require_once("controllers/admin/StaffController.php");
require_once("controllers/admin/ProductController.php");
require_once("router/route.php");
require_once('controllers/admin/AdminController.php');



$request = $_SERVER['REQUEST_URI'];


$routes = [
    '/shopcoffee/system-admin' => 'AdminController@index',

    //Login routes
    '/shopcoffee/system-admin/login' => 'AdminController@login',

    //Product routes
    '/shopcoffee/system-admin/product' => 'ProductController@index',
    '/shopcoffee/system-admin/product/create' => 'ProductController@create',
    '/shopcoffee/system-admin/product/show/slug' => 'ProductController@show',
    '/shopcoffee/system-admin/addfakeProduct' => 'ProductController@fakeProduct',
    '/shopcoffee/system-admin/product/edit/slug' => 'ProductController@edit',


    //Staff routes
    '/shopcoffee/system-admin/staff' => 'StaffController@index',
    
];

function HandelRoute($request, $routes) {
    $Route = new Route;
    $slug =  $Route->getSlug($routes, $request);
    if(!empty($slug)){
        $request = str_replace("/".$slug, '/slug', $request);
        if (array_key_exists($request, $routes)) {
            foreach($routes as $index => $value){
                if(strstr($index,"slug")){
                    if($index == $request){
                        list($NameController, $action) = explode("@", $routes[$request]);
                        $controller = new $NameController();
                        $controller->$action($slug);
                    }
                }
            }
        }else {
            $Route = new Route;
            $Route->warning();
        }
    }else{
        if (array_key_exists($request, $routes)) {
            list($NameController, $action) = explode("@", $routes[$request]);
            $controller = new $NameController();
            $controller->$action(!empty($slug) ? $slug : "");
        } else {
            $Route = new Route;
            $Route->warning();
        }
    }
}

HandelRoute($request, $routes);



