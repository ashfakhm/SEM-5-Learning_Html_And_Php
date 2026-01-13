<form method="POST">
    <label for="num">Enter A Number</label>
    <br>
    <input type="number" name="number" id="num" required>
    <br>
    <input type="submit" value="Check">
    <br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    function classifyNumber($num) {
        $sum = 0;
        for ($i = 1; $i < $num; $i++) {
            if ($num % $i == 0) {
                $sum += $i;
            }
        }

        if ($sum == $num) {
            echo "$num is a Perfect Number.";
        } elseif ($sum > $num) {
            echo "$num is an Abundant Number.";
        } else {
            echo "$num is a Deficient Number.";
        }
    }

    classifyNumber($number);
}
?>