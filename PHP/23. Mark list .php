

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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "NA";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roll_no = $_POST['roll_no'];

        $sql = "SELECT * FROM student WHERE roll_no = $roll_no";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Mark List</h3>";
            echo "<table border='1' cellpadding='5'>
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Mark</th>
                        <th>Grade</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
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

    mysqli_close($conn);
    ?>
</body>
</html>

