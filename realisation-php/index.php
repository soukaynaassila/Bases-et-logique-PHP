<?php
$result = "";
$x = "";
$y = "";

if (isset($_POST["operation"])) {
    $x = $_POST["num1"];
    $y = $_POST["num2"];
    $op = $_POST["operation"];

    if (is_numeric($x) && is_numeric($y)) {
        switch ($op) {
            case "add":
                $result = $x + $y;
                break;
            case "sub":
                $result = $x - $y;
                break;
            case "mul":
                $result = $x * $y;
                break;
            case "div":
                if ($y == 0) {
                    $result = "خطأ: القسمة على صفر";
                } else {
                    $result = $x / $y;
                }
                break;
        }
    } else {
        $result = "دخل أرقام صحيحة";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mini Calculateur PHP</title>
</head>
<body>

<h2>Calculateur PHP</h2>

<form method="post">
    <input type="number" name="num1" placeholder="الرقم 1" value="<?php echo $x; ?>" required>
    <input type="number" name="num2" placeholder="الرقم 2" value="<?php echo $y; ?>" required>

    <br><br>

    <button type="submit" name="operation" value="add">+</button>
    <button type="submit" name="operation" value="sub">-</button>
    <button type="submit" name="operation" value="mul">*</button>
    <button type="submit" name="operation" value="div">/</button>
</form>

<br>

<div>
    <strong>النتيجة:</strong> <?php echo $result; ?>
</div>

</body>
</html>
