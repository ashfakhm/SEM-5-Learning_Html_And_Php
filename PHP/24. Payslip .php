<!DOCTYPE html>
<html>
<head>
    <title>PaySlip Generator</title>
</head>
<body>
    <form action="" method="post">
        <h3>Enter Employee Details</h3>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="basic_salary">Basic Salary</label>
        <input type="number" name="basic_salary" id="basic_salary" required min="0" step="0.01">
<br><br>

        <label for="designation">Designation</label>
        <select name="designation" id="designation" required>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Clerk">Clerk</option>
            <option value="Peon">Peon</option>
        </select><br><br>

        <label for="date">Date</label>
        <input type="date" name="date" id="date" required><br><br>

        <input type="submit" value="Generate Pay Slip">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $basic_salary = $_POST["basic_salary"];
    $designation = $_POST["designation"];
    $date = $_POST["date"];

    if ($designation == "Manager") {
        $conveyance_allowance = 1000;
        $extra_allowance = 500;
    } elseif ($designation == "Supervisor") {
        $conveyance_allowance = 750;
        $extra_allowance = 200;
    } elseif ($designation == "Clerk") {
        $conveyance_allowance = 500;
        $extra_allowance = 100;
    } else {
        $conveyance_allowance = 250;
        $extra_allowance = 0;
    }

    $hra = 0.25 * $basic_salary;
    $gross_salary = $basic_salary + $hra + $conveyance_allowance + $extra_allowance;

    if ($gross_salary <= 2000) {
        $tax = 0;
    } elseif ($gross_salary <= 4000) {
        $tax = 0.03 * $gross_salary;
    } elseif ($gross_salary <= 5000) {
        $tax = 0.08 * $gross_salary;
    } else {
        $tax = 0.12 * $gross_salary;
    }

    $net_salary = $gross_salary - $tax;

    echo "<form><fieldset>";
    echo "<legend><b>Pay Slip</b></legend>";
    echo "<h4 style='text-align:right;'>Date: $date</h4>";
    echo "<table border='1' cellspacing='0' cellpadding='8' width='400'>";
    echo "<tr><td><b>Name</b></td><td>$name</td></tr>";
    echo "<tr><td><b>Designation</b></td><td>$designation</td></tr>";
    echo "<tr><td><b>Basic Salary</b></td><td>$basic_salary</td></tr>";
    echo "<tr><td><b>HRA (25%)</b></td><td>$hra</td></tr>";
    echo "<tr><td><b>Conveyance Allowance</b></td><td>$conveyance_allowance</td></tr>";
    echo "<tr><td><b>Extra Allowance</b></td><td>$extra_allowance</td></tr>";
    echo "<tr><td><b>Gross Salary</b></td><td>$gross_salary</td></tr>";
    echo "<tr><td><b>Tax</b></td><td>$tax</td></tr>";
    echo "<tr><td><b>Net Salary</b></td><td>$net_salary</td></tr>";
    echo "</table>";
    echo "</fieldset></form>";
}
?>
