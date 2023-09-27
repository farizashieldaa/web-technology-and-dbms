<?php
$username = "root";
$password = "";
$dbname = "classicmodels";

// Create Connection
$id_mysql = mysqli_connect("localhost", $username, $password, $dbname);

// Check Connection
if ($id_mysql->connect_error) {
    die("Connection failed: " . $id_mysql->connect_error);
}

// Get Data
$productCode = $_POST['productCode'];
$productName = $_POST['productName'];
$productLine = $_POST['productLine'];
$productScale = $_POST['productScale'];
$productVendor = $_POST['productVendor'];
$productDescription = $_POST['productDescription'];
$quantityInStock = $_POST['quantityInStock'];
$buyPrice = $_POST['buyPrice'];
$MSRP = $_POST['MSRP'];

// Check the productLine value in the productlines table
$sqlCheck = "SELECT productLine FROM productlines WHERE productLine = '$productLine'";
$resultCheck = $id_mysql->query($sqlCheck);

if ($resultCheck->num_rows > 0) {
    // The productLine value is in the productlines table, run the INSERT query
    $sql = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) 
          VALUES ('$productCode','$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', $quantityInStock, $buyPrice, $MSRP)";

    if ($id_mysql->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "There is an error: " . $id_mysql->error;
    }
} else {
    echo "Invalid productLine value.";
}

$id_mysql->close();
?>