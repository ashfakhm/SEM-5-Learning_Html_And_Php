<?php
$servername = "localhost";
$username = "root";  
$password = "";       
$dbname = "NA";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Mark List</title>
</head>
<body>
    <h2>Search Student Mark List</h2>
    <form method="post">
        Enter Roll No: <input type="text" name="roll_no" required>
        <input type="submit" value="Search">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roll_no = $_POST['roll_no'];

        $sql = "SELECT * FROM student WHERE roll_no = $roll_no";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Mark List</h3>";
            echo "<table border='1' cellpadding='5'>
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Mark</th>
                        <th>Grade</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['roll_no']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['mark']}</td>
                        <td>{$row['Grade']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No record found for Roll No: $roll_no</p>";
        }
    }

    $conn->close();
    ?>
</body>
</html>

