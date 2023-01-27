<?php

abstract class Products
{
    private $books = [];
    private $discs = [];
    private $furniture = [];
    abstract public function setProduct();
    abstract public function getProduct();
}
class Dvd_Disc extends Products
{
    public function setProduct()
    {
        $final_results = new GetProduct();
        $final_results = $final_results->getSpecificProductsByType("disc");
        usort($final_results, function ($a, $b) {
            return $a["p_name"] <=> $b["p_name"];
        });
        for ($arr_ctr = 0; $arr_ctr < count($final_results); $arr_ctr++) {
            $this->discs[] = $final_results[$arr_ctr];
        }
    }
    public function getProduct()
    {
        $discs = $this->discs;
        for ($i = 0; $i < count($discs); $i++) {
            $discs[$i]["p_attribute"] =
                "Size: " . $discs[$i]["p_attribute"] . " MB";
        }
        return $discs;
    }
}
class Books extends Products
{
    public function setProduct()
    {
        $final_results = new GetProduct();
        $final_results = $final_results->getSpecificProductsByType("books");
        usort($final_results, function ($a, $b) {
            return $a["p_name"] <=> $b["p_name"];
        });
        for ($arr_ctr = 0; $arr_ctr < count($final_results); $arr_ctr++) {
            $this->books[] = $final_results[$arr_ctr];
        }
    }
    public function getProduct()
    {
        $books = $this->books;
        for ($i = 0; $i < count($books); $i++) {
            $books[$i]["p_attribute"] =
                "Weight: " . $books[$i]["p_attribute"] . " KG";
        }
        return $books;
    }
}
class Furniture extends Products
{
    public function setProduct()
    {
        $final_results = new GetProduct();
        $final_results = $final_results->getSpecificProductsByType("furniture");
        usort($final_results, function ($a, $b) {
            return $a["p_name"] <=> $b["p_name"];
        });
        for ($arr_ctr = 0; $arr_ctr < count($final_results); $arr_ctr++) {
            $this->furniture[] = $final_results[$arr_ctr];
        }
    }
    public function getProduct()
    {
        $furniture = $this->furniture;
        for ($i = 0; $i < count($furniture); $i++) {
            $furniture[$i]["p_attribute"] =
                "Size: " . str_replace(".", "x", $furniture[$i]["p_attribute"]);
        }
        return $furniture;
    }
}
abstract class DatabaseQuery
{
    // public  function getAllProducts();
    abstract public function getSpecificProductsByType($type);
    abstract public function getAllProducts();
    // public function getSpecificProductsById($productId);
    // public function addProductToDb($sku){};
    // public boolean checkSku();
}

class GetProduct extends DatabaseQuery
{
    public function getSpecificProductsByType($type)
    {
        include "database.php";

        $sql_search =
            "SELECT * FROM product_table WHERE p_type = '" . $type . "';";
        $results = mysqli_query($conn, $sql_search);
        if ($results === false) {
            return null;
        } else {
            $final = [];
            while ($row = mysqli_fetch_assoc($results)) {
                array_push($final, $row);
            }
            return $final;
        }
    }
    public function getAllProducts()
    {
        $books = new Books();
        $books->setProduct();
        $books = $books->getProduct();
        $furniture = new Furniture();
        $furniture->setProduct();
        $furniture = $furniture->getProduct();
        $discs = new Dvd_Disc();
        $discs->setProduct();
        $discs = $discs->getProduct();
        $products = array_merge($books, $furniture, $discs);
        usort($products, function ($a, $b) {
            return $a["id"] <=> $b["id"];
        });
        return $products;
    }
}
// class AddProduct extends DatabaseQuery(){
//     function addProductToDb($sku){
//     $checkSku = new CheckSku()->checkSku();
//     $checkSku === true ?
//     echo "SKU already exists in the database" :
//     echo "Good to go!";

//     }
// }
// class CheckSku extends DatabaseQuery(){
//     public boolean checkSku($sku){

//     $sql = "SELECT `product_table` FROM `products` WHERE `sku` == $sku";
//     $result = $conn->query($sql);
//     if($result->num_rows>0){
//         $conn->close();
//         return true;
//     }
//     else{
//         $conn->close();
//         return false;
//     }
//     }
// }

// $testAddProduct = new AddProduct();
// $test->addProductToDb('sku1');
