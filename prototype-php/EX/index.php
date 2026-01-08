<?php
$x = "";
$y = 2026;
$result = "";

if (isset($_GET["calc"])) {

    $x = $_GET["age"];

    if (is_numeric($x)) {
        $result = $y - $x;
    } else {
        $result = "Please enter a valid number";
    
    }
    echo "your age is .$result.years.<br> IDAN 3EMEREK WA9EFE F 24 ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate</title>
</head>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">

    <div>
        <label>Age</label>
        <input type="number" name="age" value="<?php echo $x ?>">
    </div>

    <div>
        <label>Year</label>
        <input type="number" value="<?php echo $y ?>" readonly>
    </div>

    <div>
        <label>Result</label>
        <input type="text" value="<?php echo $result; ?>" readonly>
    </div>

    <div>
        <input type="submit" name="calc" value="Calculate">
    </div>

</form>

</body>
</html>
