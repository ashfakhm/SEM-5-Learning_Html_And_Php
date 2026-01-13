<!DOCTYPE html>
<html>
<head>
<title>Insert Product</title>
</head>
<body>
<h3>Product Details</h3>
<form method="POST">
Item code : <input type="number" name="itemcode" required><br><br>
Item name : <input type="text" name="itemname" required><br><br>
Unit price: <input type="number" name="unitprice" required><br><br>
<input type="submit" name="submit" value="Add">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "NA";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "CREATE TABLE IF NOT EXISTS product (
                itemcode INT PRIMARY KEY,
                itemname VARCHAR(50),
                unitprice DECIMAL(10,2)
            )";
    mysqli_query($conn, $sql);


    $itemcode = $_POST['itemcode'];
    $itemname = $_POST['itemname'];
    $unitprice = $_POST['unitprice'];


    $check = mysqli_query($conn, "SELECT * FROM product WHERE itemcode=$itemcode");
    if (mysqli_num_rows($check) > 0) {
        echo "<p style='color:red;'>Error: Item code already exists.</p>";
    } else {
        // Insert record
        $insert = "INSERT INTO product VALUES ($itemcode, '$itemname', $unitprice)";
        if (mysqli_query($conn, $insert)) {
            echo "<p style='color:green;'>Record inserted successfully!</p>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

   
    $result = mysqli_query($conn, "SELECT * FROM product ORDER BY itemcode");
    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Products List</h3>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Item Code</th><th>Item Name</th><th>Unit Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['itemcode']}</td>
                    <td>{$row['itemname']}</td>
                    <td>{$row['unitprice']}</td>
                 </tr>";
        }
        echo "</table>";
    }

    mysqli_close($conn);
}
?>
</body>
</html>
