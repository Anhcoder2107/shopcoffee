<?php 
require_once('controllers/Controller.php');
require_once('models/admin/ProductModel.php');
require_once('vendor/autoload.php');
require_once('vendor/fakerphp/faker/src/autoload.php');


use Faker\Factory;

class ProductController extends Controller{
    // private $productModel;

    // public function __contruct() {
    //     $this->productModel = new ProductModel; 
    // }

    //Home Product
    public function index(){
        // $productModel = new ProductModel;
        $products = ProductModel::getAllTable("products");
//        echo json_encode($products);
        $product =  json_encode($products);
        // require_once('views/admin/product/product.php');
    }

    // Show product with id
    public function show($id){
        $productModel = new ProductModel;
        $product = $productModel->getRecordByID("products", "product_id", $id);
        echo json_encode($product);
    }


    // Create product 
    public function create(){
        if(isset($_POST['submit'])){
            $data = [
                'product_name' => $_POST['product_name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'thumbnail' => $_POST['thumbnail'],
                'unit' => $_POST['unit'],
                'expiry_date' => $_POST['expiry_date'],
            ];
            $productModel = new ProductModel;
            $productModel->addProduct($data);
            // var_dump( $data);
        }else{
            require_once('views/admin/product/createProduct.php');
        }


    }


    // Show form edit product
    public function edit($id){
        echo "Day la Slug Edit " . $id;
    }


    // Update product
    public function update($id){

    }


    // Remote product by id
    public function destroy($id){
        $productModel = new ProductModel;
        $productModel::deleteRecordByID("products", "product_id", $id);
    }

    public function fakeProduct (){
        $fakeData = new Factory;
        $fakeProduct = $fakeData::create();
        $dataFake = [
            'product_name' => $fakeProduct->name(),
            'description' => $fakeProduct->realText($maxNbChars = 200, $indexSize = 2),
            'price' => $fakeProduct->randomFloat(),
            'thumbnail' => $fakeProduct->imageUrl(360, 360, 'animals', true, 'cats'),
            'unit' => $fakeProduct->word(),
            'expiry_date' => $fakeProduct->date($format = 'Y-m-d', $max = 'now')
        ];
        $productModel = new ProductModel;
        $productModel->addProduct($dataFake);
        echo "fake data thanh cong";


        //fake 1000 record
        
    }
}


