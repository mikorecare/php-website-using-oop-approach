<?php
include "header.php"; ?>  
    <body> 
    <div class="container-fluid main-body">
        <div class="row">
            <div class="col-sm-3 pull-left">
                <h1>
                Product List
                </h1>
            </div>
            <div class="col-sm-9 pull-right btn-container d-flex flex-row-reverse">
                <button class="btn">Mass Delete</button>
                <button class="btn" onClick="goToAddProduct()">Add</button>
            </div>
        </div>
        <div class="row hr-row">
        <hr class="hr-top">
        </div>
        <div class="row">

<?php
include "classes.php";

$products = new GetProduct();
$products = $products->getAllProducts();

echo "<table>";
for ($arr = 0; $arr < count($products); $arr++) {
    if ($arr % 4 == 0) {
        echo "<tr>";
    }

    echo '<td colspan="25%">' .
        '<div class="product-data"><input type="checkbox" class="delete-checkbox">' .
        '<div class="data-holder">' .
        $products[$arr]["p_sku"] .
        "<br>" .
        $products[$arr]["p_name"] .
        "<br>" .
        '$ ' .
        $products[$arr]["p_price"] .
        "<br>" .
        $products[$arr]["p_attribute"] .
        "<br>" .
        '</div>
                </div>
                </td>';
}
for ($arr = 0; $arr < count($products); $arr++) {
    //closing loop for table rows
    if ($arr % 4 == 0) {
        echo "</tr>";
    }
    if ($arr == count($products)) {
        echo "</tr>";
    }
}
echo "</table>";
?> 
            </div>
        </div>
    </div>
    </body>
         


