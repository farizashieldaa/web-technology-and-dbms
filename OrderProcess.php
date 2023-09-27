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
$orderNumber = $_POST['orderNumber'];
$orderDate = $_POST['orderDate'];
$requiredDate = $_POST['requiredDate'];
$shippedDate = $_POST['shippedDate'];
$status = $_POST['status'];
$comments = $_POST['comments'];
$customerNumber = $_POST['customerNumber'];

// Check the customerNumber value in the customers table
$sqlCheck = "SELECT customerNumber FROM customers WHERE customerNumber = '$customerNumber'";
$resultCheck = $id_mysql->query($sqlCheck);

if ($resultCheck->num_rows > 0) {
    // The customerNumber value is in the customers table, run the INSERT query
    $sql = "INSERT INTO Orders (orderNumber, orderDate, requiredDate, shippedDate, status, comments, customerNumber) 
          VALUES ('$orderNumber', '$orderDate', '$requiredDate', '$shippedDate', '$status', '$comments', '$customerNumber')";

    if ($id_mysql->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "There is an error: " . $id_mysql->error;
    }
} else {
    echo "Invalid Customer Number Value.";
}

$id_mysql->close();
?>
