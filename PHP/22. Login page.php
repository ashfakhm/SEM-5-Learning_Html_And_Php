<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body style="margin-top: 150px;">
    <center>
    <form method="post" style="padding: 50px;">
        <h3>Login</h3>
        <label for="Username">Username</label>
        <input type="text" name="username" id="Username" placeholder="Type Your Name Here" required>
        <br><br>
        <label for="Password">Password</label>
        <input type="password" name="password" id="Password" placeholder="******" required>
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "NA";

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            echo "<p style='color:green;'>Login successful! Welcome, $username.</p>";
        } else {
            echo "<p style='color:red;'>Invalid username or password.</p>";
        }
    }

    mysqli_close($conn);
    ?>
    </center>
</body>
</html>
