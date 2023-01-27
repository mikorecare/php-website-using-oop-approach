<?php
include "header.php"; ?>


<body> 
    <form id="product_form" method="post" action="submit.php" novalidate>
    <div class="container-fluid main-body">
        <div class="row">
            <div class="col-sm-3 pull-left">
                    <h1>
                    Product Add
                    </h1>
            </div>
            <div class="col-sm-9 pull-right btn-container d-flex flex-row-reverse">
                <button class="btn" type="submit" form="product_form">Save</button>
                <button class="btn" onClick="cancelAdd()">Cancel</button>
            </div>
        </div>
        <div class="row hr-row">
        <hr class="hr-top">
    </div>
    <div class="container-fluid">
        
            <div class="form-group">
                <label for="sku" class="col-sm-1">SKU</label>
                <input name="sku" type="text" class="form-control" id="sku" >
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-1">Name</label>
                <input name="name" type="text" class="form-control" id="name" >  
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-1">Price ($)</label>
                <input name="price" type="text" class="form-control" id="price" >
            </div>
            <br><br>
            <div class="form-group row">
                <div class="dropdown col-sm-2">
                    <label for="productType">Type Switcher:</label>
                </div>
                <div class="col-sm-2">
                <select class="form-select" name="productType" id="productType" onChange="showForm()">
                    <option value="DVD">DVD</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Book">Book</option>
                </select>
                </div>   
            </div>
            <!-- dymanic dvd -->
            <div class="form-group" id="dvd">
                <div class="form-group">
                    <label for="size" class="col-sm-1">Size (MB)</label>
                    <input name="size" type="text" class="form-control" id="size" >
                </div>
                    <p class="product-info col-sm-4">Please provide the size of the DVD disc in megabytes</p>
            </div>
            <!-- dynamic furniture -->
            <div class="form-group hidden" id="furniture">
                <div class="form-group">
                    <label for="height" class="col-sm-1">Height (CM)</label>
                    <input name="height" type="text" class="form-control" id="height" >
                </div>
            <div class="form-group">
                <label for="width" class="col-sm-1">Width (CM)</label>
                <input name="width" type="text" class="form-control" id="width" >
            </div>
            <div class="form-group">
                <label for="length" class="col-sm-1">Length (CM)</label>
                <input name="length" type="text" class="form-control" id="length" >
            </div>
                <p class="product-info col-sm-4">Please provide the dimension of the furniture (Height x Width x Length) in centimeters</p>
            </div>
            <!-- dynamic book -->
            <div class="form-group hidden" id="book">
            <div class="form-group">
                <label for="weight" class="col-sm-1">Weight (KG)</label>
                <input name="weight" type="text" class="form-control" id="weight" >
            </div>
                <p class="product-info col-sm-4">Please provide the weight of the book in kilograms</p>
            </div>
        </div>
    </form>
</body>