<?php
$result = "";
$x = "";
$y = "";

if (isset($_GET["operation"])) {
    $x = $_GET["num1"];
    $y = $_GET["num2"];
    $op = $_GET["operation"];

    if (is_numeric($x) && is_numeric($y)) {
        switch ($op) {
            case "+":
                $result = $x + $y;
                break;
            case "-":
                $result = $x - $y;
                break;
            case "*":
                $result = $x * $y;
                break;
            case "/":
                if ($y == 0) {
                    $result = "wrong /0";
                } else {
                    $result = $x / $y;
                }
                break;
        }
    } else {
        $result = "int nmber";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">

    <!-- Number 1 -->
    <div>
        <label>Number 1</label>
        <input type="number" name="num1" value="<?php echo $x; ?>">
    </div>

    <!-- Number 2 -->
    <div>
        <label>Number 2</label>
        <input type="number" name="num2" value="<?php echo $y; ?>">
    </div>

    <!-- Result -->
    <div>
        <label>Result</label>
        <input type="text" value="<?php echo $result; ?>" readonly>
    </div>

    <!-- Operations -->
    <div>
        <input type="submit" value="+" name="operation">
        <input type="submit" value="-" name="operation">
        <input type="submit" value="*" name="operation">
        <input type="submit" value="/" name="operation">
    </div>

</form>

</body>
</html>
