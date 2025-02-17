<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h2>Tax Calculation Form</h2>
    <form method="post">
        <label for="income">Annual Income:</label>
        <input type="number" name="income"  required><br><br>

        <label for="status">Marital Status:</label>
        <select name="status" id="status" required>
            <option value="married">Married</option>
            <option value="unmarried">Un-married</option>
        </select><br><br>
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $income = $_POST["income"];
        $status = $_POST["status"];
        $gender = $_POST["gender"];
        $tax = 0;
        
        // Calculate tax based on marital status
        if ($status == "married") {
            if ($income <= 450000) {
                $tax = $income * 0.01;
            } elseif ($income > 450000 && $income <= 550000) {
                $tax = 450000 * 0.01 + ($income - 450000) * 0.10;
            } elseif ($income > 550000 && $income <= 750000) {
                $tax = 450000 * 0.01 + 100000 * 0.10 + ($income - 550000) * 0.20;
            } elseif ($income > 750000 && $income <= 1300000) {
                $tax = 450000 * 0.01 + 100000 * 0.10 + 200000 * 0.20 + ($income - 750000) * 0.30;
            } else {
                $tax = 450000 * 0.01 + 100000 * 0.10 + 200000 * 0.20 + 550000 * 0.30 + ($income - 1300000) * 0.35;
            }
        } else {
            if ($income <= 400000) {
                $tax = $income * 0.01;
            } elseif ($income > 400000 && $income <= 500000) {
                $tax = 400000 * 0.01 + ($income - 400000) * 0.10;
            } elseif ($income > 500000 && $income <= 750000) {
                $tax = 400000 * 0.01 + 100000 * 0.10 + ($income - 500000) * 0.20;
            } elseif ($income > 750000 && $income <= 1300000) {
                $tax = 400000 * 0.01 + 100000 * 0.10 + 250000 * 0.20 + ($income - 750000) * 0.30;
            } else {
                $tax = 400000 * 0.01 + 100000 * 0.10 + 250000 * 0.20 + 550000 * 0.30 + ($income - 1300000) * 0.35;
            }
        }

        // Apply 10% discount for females
        if ($gender == "female") {
            $tax *= 0.90;
        }

        echo "<h3>Calculated Tax: ₹" . number_format($tax, 2) . "</h3>";
    }
    ?>
</body>
</html>
