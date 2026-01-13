<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
</head>
<body>
    <h2>Enter Your Personal Details</h2>
    <form method="POST">
        <label for="Name">Name</label><br>
        <input type="text" id="Name" name="name" required><br><br>

        <label for="age">Age</label><br>
        <input type="number" id="age" name="age" required min="18"><br><br>

        <label>Gender</label><br>
        <label for="Male">Male</label>
        <input type="radio" name="gender" id="Male" value="Male" required><br>
        <label for="Female">Female</label>
        <input type="radio" name="gender" id="Female" value="Female"><br><br>

        <label for="Email">Email</label><br>
        <input type="email" id="Email" name="email" required><br><br>

        <label for="Address">Address</label><br>
        <textarea name="address" id="Address" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        echo "<h2>Your Bio Data:</h2>";
        echo "Name: $name<br>";
        echo "Age: $age<br>";
        echo "Gender: $gender<br>";
        echo "Email: $email<br>";
        echo "Address: $address<br>";
    }
    ?>
</body>
</html>
