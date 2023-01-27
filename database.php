<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "connection error";
    die("Connection failed: " . $conn->connect_error);
}

// $sql_insert = "INSERT INTO product_table (sku, product_name, price, attributes)
// VALUES ($sku, $product_name, $price, $attributes)";
// $sql_search_all = "SELECT * FROM product_table WHERE p_sku = `sku1`";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $results = mysqli_query($conn,$sql_search_all);
// if($results===false){
//   echo "pakyu";
// }

// if(mysqli_num_rows($results)>0){
//     while($row = mysqli_fetch_assoc($results)) {
//         echo "id: " . $row["id"]. " - Name: " . $row["p_name"]. "size: ". $row["p_attribute"] . " " . $row["p_type"]. "<br>";
//       }

// }
// else{
//     echo "pakyu";
// }
