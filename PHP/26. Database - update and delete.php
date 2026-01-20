<!DOCTYPE html>
<html>
<head>
<title>Account Operations</title>
</head>
<body>
<h2>Update Account</h2>
<form method="post">
    Account No: <input type="number" name="accno" required><br><br>
    New Name: <input type="text" name="newname" required><br><br>
    New Amount: <input type="number" name="newamount" required><br><br>
    <input type="submit" name="update" value="Update Account">
</form>

<h2>Delete Account</h2>
<form method="post">
    Account No: <input type="number" name="delaccno" required><br><br>
    <input type="submit" name="delete" value="Delete Account">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NA";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$create = "CREATE TABLE IF NOT EXISTS account(
              accountno INT PRIMARY KEY,
              name VARCHAR(50),
              amount DECIMAL(10,2)
           )";
mysqli_query($conn, $create);


if (isset($_POST['update'])) {
    $accno = $_POST['accno'];
    $newname = $_POST['newname'];
    $newamount = $_POST['newamount'];

    $check = mysqli_query($conn, "SELECT * FROM account WHERE accountno=$accno");
    if (mysqli_num_rows($check) > 0) {
        $sql = "UPDATE account SET name='$newname', amount=$newamount WHERE accountno=$accno";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:green;'>Account updated successfully!</p>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "<p style='color:red;'>Account number not found.</p>";
    }
}


if (isset($_POST['delete'])) {
    $delacc = $_POST['delaccno'];

    $check = mysqli_query($conn, "SELECT * FROM account WHERE accountno=$delacc");
    if (mysqli_num_rows($check) > 0) {
        $sql = "DELETE FROM account WHERE accountno=$delacc";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:green;'>Account deleted successfully!</p>";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "<p style='color:red;'>Account number not found.</p>";
    }
}


$result = mysqli_query($conn, "SELECT * FROM account ORDER BY accountno");
if (mysqli_num_rows($result) > 0) {
    echo "<h3>Accounts List</h3>";
    echo "<table border='1' cellpadding='6'>";
    echo "<tr><th>Account No</th><th>Name</th><th>Amount</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['accountno']}</td>
                <td>{$row['name']}</td>
                <td>{$row['amount']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No accounts found.</p>";
}

mysqli_close($conn);
?>
</body>
</html>
