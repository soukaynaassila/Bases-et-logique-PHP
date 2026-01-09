<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Quize</title>
</head>
<body>
    <form action="result.php" method="post">
    <h1>Quize</h1>
    <p>Q1 : What does PHP stand for?</p>
    <input type="radio" name="Q1" value="PHP: Hyperspeed Performance">PHP: Hyperspeed Performance<br>
    <input type="radio" name="Q1" value="PHP: Hyperformat Programming">PHP: Hyperformat Programming<br>
    <input type="radio" name="Q1" value="PHP: Hypertext Preprocessor">PHP: Hypertext Preprocessor<br>

    <p>Q2 :Which statement is NOT true about PHP</p>
    <input type="radio" name="Q2" value="PHP is a Front End code library">PHP is a Front End code library<br>
    <input type="radio" name="Q2" value="PHP can generate dynamic page content">PHP can generate dynamic page content<br>
    <input type="radio" name="Q2" value="PHP is free">PHP is free<br>

<p>Q3 : What will be the output of the following code:
<pre><code>if (5 == 5 && 3 < 7) {
  echo "Hello";
} else {
  echo "Good bye";
}</code></pre></p>
<input type="radio" name="Q3" value="code1">True<br>
<input type="radio" name="Q3" value="code2">False<br>
<button type="submit">finich Quiz</button>
</form>
</body>
</html>