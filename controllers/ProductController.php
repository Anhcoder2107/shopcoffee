<?php 

class ProductController{

    //Home Product
    public function index(){
        require_once('views/product/product.php');
    }

    // Show product with id
    public function show($id){
        $productModel = new ProductModel;
    }


    
}


