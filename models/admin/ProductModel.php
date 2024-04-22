<?php

    require_once('config/config.php');
    require_once('models/Model.php');
?>
<?php 


class ProductModel extends Model {
    //
    private $product;

    public function __construct(){
        //Create new object DB
        $this->product = new DB;
    }

    private $Columns =[
        'product_name',
        'description',
        'price',
        'thumbnail',
        'unit',
        'expiry_date'
    ];

    //$product_name, $description, $price, $thumbnail, $quantity_stock, $unit, $expiry_date
    public function addProduct($data){

        if($this->validateDataKeys($data, $this->Columns)){
            $query = "INSERT INTO products (". implode(", ", $this->Columns).") VALUES (:". implode(", :", $this->Columns).")";
            $addProduct = $this->product->prepare($query);

            foreach($data as $key => $value){
                $addProduct->bindValue(":$key", $value);
            }
            $addProduct->execute();
            return $addProduct;
        }else{
            return "Dữ liệu không hợp lệ";
        }
    }

    //$id, $product_name, $description, $price, $thumbnail, $quantity_stock, $unit, $expiry_date
    public function updateProduct($id, $data){
        if($this->validateDataKeys($data, $this->Columns)){
            $updateColumns = [];
            foreach ($data as $key => $value) {
                $updateColumns[] = "$key=:$key";
            }
            $query = "UPDATE products SET ". implode(", ", $updateColumns). " WHERE product_id = $id";
            $updateProduct =  $this->product->prepare($query);
            foreach ($data as $key => $value) {
                $updateProduct->bindValue(":$key", $value);
            }
            $updateProduct->execute();
            return $updateProduct;
        }else{
            return "Dữ liệu không hợp lệ";
        }

    }

}

?>