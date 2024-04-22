<?php 

require_once("router/route.php");
require_once("./controllers/Controller.php");
require_once('controllers/auth/loginController.php');
require_once('controllers/auth/registerController.php');
require_once('controllers/auth/logoutController.php');
require_once('controllers/auth/forgotPasswordController.php');
require_once('controllers/ProductController.php');
require_once('controllers/BlogController.php');

// Khai Bao Bien

$request = $_SERVER['REQUEST_URI'];
if($request[-1] == "/" && $request != "/shopcoffee/" ){
    $request = rtrim($request, '/');
}


$routes = [
    //Home Controller
    '/shopcoffee/' => 'Controller@home',

    // Authentication routes
    '/shopcoffee/login' => 'LoginController@HanderLogin',
    '/shopcoffee/register' => 'RegisterController@HanderRegister',
    '/shopcoffee/logout' => 'LogoutController@HanderLogout',

    //Forgot password and reset password
    '/shopcoffee/forgotPassword' => 'ForgotPasswordController@FormGetEmail',
    '/shopcoffee/resetPassword' => 'ForgotPasswordController@resetPassword',

    //Product
    '/shopcoffee/products' => 'ProductController@index',

    //Blog
    '/shopcoffee/blog' => 'BlogController@index',


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
            $Route->warning();
        }
    }else{
        if (array_key_exists($request, $routes)) {
            list($NameController, $action) = explode("@", $routes[$request]);
            $controller = new $NameController();
            $controller->$action(!empty($slug) ? $slug : "");
        } else {
            $Route->warning();
        }
    }

    
}

HandelRoute($request, $routes);


