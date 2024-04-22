<?php 
require_once('controllers/Controller.php');
require_once('vendor/autoload.php');
require_once('vendor/fakerphp/faker/src/autoload.php');


use Faker\Factory;

class ProductController extends Controller{

    //Home Product
    public function index(){
        require_once('views/product/product.php');
    }

    // Show product with id
    public function show($id){
        $productModel = new ProductModel;
    }


    
}


