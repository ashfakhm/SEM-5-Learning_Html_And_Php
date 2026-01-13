<!DOCTYPE html>
<html>
<head>
<title>Fruit Selection</title>
</head>
<body>
<h2>Select Your Favourite Fruits</h2>

<form method="post">
    <label for="fruits">Choose fruits:</label><br><br>
    <select name="fruits[]" id="fruits" multiple size="6">
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Mango">Mango</option>
        <option value="Orange">Orange</option>
        <option value="Grapes">Grapes</option>
        <option value="Pineapple">Pineapple</option>
    </select><br><br>
    <input type="submit" name="submit" value="Show Selected Fruits">
</form>

<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['fruits'])) {
        echo "<h3>You selected:</h3>";
        echo "<ul>";
        foreach ($_POST['fruits'] as $fruit) {
            echo "<li>" . htmlspecialchars($fruit) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color:red;'>No fruits selected.</p>";
    }
}
?>
</body>
</html>