<form method="POST">
    <label for="num">Enter a Number</label>
    <br>
    <input type="number" name="number" id="num" required>
    <br>
    <input type="submit" value="Show Fibonacci">
    <br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    function displayFibonacci($limit) {
        $a = 0;
        $b = 1;

        echo "Fibonacci sequence up to $limit:<br>";

        while ($a <= $limit) {
            echo "$a ";
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
    }

    displayFibonacci($number);
}
?>
