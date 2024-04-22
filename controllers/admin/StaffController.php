<?php
require_once('controllers/Controller.php');
require_once('models/admin/StaffModel.php');
require_once('vendor/autoload.php');
require_once('vendor/fakerphp/faker/src/autoload.php');

use Faker\Factory;

class StaffController extends Controller{

    public function index(){
        $StaffModel = new StaffModel;
        echo "staff";
    }

    // Show staff with id
    public function show($id){
        
    }


    // New staff 
    public function create(){
    }
    


    // Show form edit staff
    public function edit($id){

    }


    // Update staff
    public function update($id){

    }


    // Remote staff
    public function destroy($id){

    }

    public function fakeProduct (){
        $fakeData = new Factory;
        $fakeProduct = $fakeData::create();
        $productModel = new ProductModel;
        //fake data with addProduct method 1000 results
        // for ($i=0; $i < 1000; $i++) {
        //     $productModel->addProduct(
        //         $fakeProduct->name,
        //         $fakeProduct->text, 
        //         $fakeProduct->randomNumber,
        //         $fakeProduct->imageUrl, 
        //         $fakeProduct->randomNumber, 
        //         $fakeProduct->word, 
        //         $fakeProduct->date
        //     );
        // }
    }





}