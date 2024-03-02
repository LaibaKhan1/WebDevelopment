<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        <input type="number" name="value1" required="required" placeholder="Enter first number" />
        <input type="number" name="value2" required="required" placeholder="Enter second number" />
        <select name="operator" required="required">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="submit" name="calculate" value="Calculate" />
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case 'add':
                $result = $value1 + $value2;
                break;
            case 'subtract':
                $result = $value1 - $value2;
                break;
            case 'multiply':
                $result = $value1 * $value2;
                break;
            case 'divide':
                if ($value2 == 0) {
                    echo "Cannot divide by zero!";
                } else {
                    $result = $value1 / $value2;
                }
                break;
            default:
                echo "Invalid operator!";
                break;
        }

        echo "The result is: $result";
    }
    ?>
</body>
</html>