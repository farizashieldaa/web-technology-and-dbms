<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        input[type="submit"] {
            padding: 4px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }    
    </style>
</head>
<body>
    <h1>Customer List</h1>
    <form method="POST">
        <label for="shippeddate">Shipped Date:</label>
        <input type="date" name="shippeddate" id="shippeddate">
        <input type="submit" value="Fetch">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = "root";
        $password = "";
        $dbname = "classicmodels";

    // Create Connection
    $id_mysql = mysqli_connect("localhost", $username, $password, $dbname);

    // Check Connection
    if ($id_mysql->connect_error) {
        die("Connection failed: " . $id_mysql->connect_error);
    }

    $shippeddate = $_POST["shippeddate"];

    // Prepare and execute SQL query
    $sql = "SELECT customerName FROM customers right join orders 
    on customers.customerNumber = orders.customerNumber
    where orders.shippedDate = '$shippeddate'";
    
    $result = $id_mysql->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Customer List from Shipped Date: $shippeddate</h2>";
        echo "<table>";
        echo "<tr><th>Customer Name</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["customerName"] . 
            "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "No customers found from Shipped Date: $shippeddate";
        }

        $id_mysql->close();
    }
    ?>
</body>
</html>