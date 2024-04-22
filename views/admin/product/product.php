
<?php require_once 'views/default/header.php' ?>
<h1>Product</h1>


<style>
    table , td , th {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    table{
        margin:10px 20px 100px ;
    }
    th, h1{
        text-align: center;
    }
</style>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Thumbnail</th>
        <th>Unit</th>
    </tr>
    <?php 
        foreach ($products as $product){
            echo 
            "<tr>
                <td>". $product['product_id']."</td>
                <td>". $product['product_name'] ."</td>
                <td>". $product['description'] ."</td>
                <td>". $product['price'] ."</td>
                <td>". $product['thumbnail'] ."</td>
                <td>". $product['unit'] ."</td>
            </tr>";
        }
    ?>
</table>