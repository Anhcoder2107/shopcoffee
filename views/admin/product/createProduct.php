<?php require_once 'views/default/header.php' ?>

<style>
    .create-product{
        margin-left:10px;
    }

    .crate-product__input{
        margin-top: 10px;
        label {
            width: 100px;
        }
    }
</style>

<link rel="stylesheet" href="http://localhost/shopcoffee/views/styles/admin/product/create.css">


<div class="create-product">
    <!-- <form action="" method="POST">
        <div class="crate-product__input">
            <label for="product_name">Name</label>
            <input type="text" name="product_name" id="product_name">
            
        </div>

        <div class="crate-product__input">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            
        </div>

        <div class="crate-product__input">
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
            
        </div>

        <div class="crate-product__input">
            <label for="thumbnail">Thumbnail</label>
            <input type="text" name="thumbnail" id="thumbnail">
            
        </div>

        <div class="crate-product__input">
            <label for="unit">Unit</label>
            <input type="number" name="unit" id="unit">
            
        </div>

        <div class="crate-product__input">
            <label for="expiry_date">Expiry Date</label>
            <input type="date" name="expiry_date" id="expiry_date">
            
        </div>

        <label for="submit">Submit</label>
        <button name="submit" id="submit">Submit</button>
    </form> -->

    <form action="" method="POST" onsubmit="return CheckBarcode()">
        <div class="create-product__container">
            <div class="create-product__container-col-8 ">
                <div class="create-product__item-col-8">
                    <div class="item-col-8__title">
                        <h5>Product information</h4>
                    </div>
                    <div class="item-col-8__input">
                        <label for="name">NAME</label>
                        <input id="name" type="text" name="name" placeholder="Product title" >
                    </div>
                    <div class="item-col-8__input-group">
                        <div class="item-col-8__input-group-item">
                            <label for="SKU">SKU</label>
                            <input id="SKU" type="text" name="SKU" placeholder="SKU">
                        </div>
                        <div class="item-col-8__input-group-item">
                            <label for="barcode">BARCODE</label>
                            <input id="barcode" type="text" name="barcode" placeholder="0123-4567">
                        </div>
                    </div>
                    <div class="item-col-8__input">
                        <label for="description">DESCRIPTION</label>
                        <textarea name="description" id="description" cols="60" rows="10" class=""></textarea>
                    </div>
                </div>
                <div class="create-product__item-col-8">
                    <div class="item-col-8__title">
                        <h5>Media</h5>
                    </div>
                    <div class="item-col-8__input">
                        <label for="image">IMAGE</label>
                        <input id="image" name="thumbnail" type="file" name="image">
                    </div>
                </div>

                <div class="create-product__item-col-8">
                    <div class="item-col-8__title">
                        <h5>Variants</h5>
                    </div>
                    <div class="item-col-8__input-group">
                        <div class="item-col-8__input-group-item">
                            <label for="option">OPTION</label>
                                <select name="variants" id="">
                                    <option value="color"> Color</option>
                                    <option value="size"> Size</option>
                                </select>
                            
                            </div>
                            <div class="item-col-8__input-group-item">
                                <label for=""><p></p></label>
                                <input type="number" name="number">
                            </div>
                    </div>
                </div>
            </div>
            <div class="create-product__container-col-4 mg-left-20">
                <div class="create-product__item-col-4">
                    <div class="item-col-4__title">
                        <h5>Pricing</h5>
                    </div>
                    <div class="item-col-4__input">
                        <label for="price">PRICE</label>
                        <input type="number" name="price" id="price">
                    </div>
                    <div class="item-col-4__input">
                        <label for="discounted-price">DISCOUNTED PRICE</label>
                        <input type="number" name="discounted-price" id="discounted-price">
                    </div>
                </div>
                <div class="create-product__item-col-4">
                    <div class="item-col-4__title">
                        <h5>Organize</h5>
                    </div>
                    <div class="item-col-4__input">
                        <label for="vendor">VENDOR</label>
                        <select name="vender" id="">
                            <option value="adam">Adam</option>
                            <option value="eve">Eve</option>
                        </select>
                    </div>
                    <div class="item-col-4__input">
                        <label for="category">Category</label>
                        <select name="category" id="">
                            <option value="coffee">Coffee</option>
                            <option value="milk">Milk</option>
                        </select>
                    </div>
                    <div class="item-col-4__input">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="create-product__submit">
            <input type="submit" class="create-product__submit-btn" >Push Product</button>
        </div>
    </form>
</div>


<script>
    var submitButton = document.getElementById("create-product__submit-btn");
    function CheckBarcode() {
        var barcode = document.getElementById("barcode").value;
        if(barcode == ""){
            alert("khong duoc de trong");
        }else{
            for(var i = 0; i < barcode.length; i++) {
                if(barcode.charCodeAt(i) < 48 || barcode.charCodeAt(i) > 57) {
                    barcode.value = " "
                    alert("Barcode la mot so");
                    return false;
                }
            }
        }
    }

</script>