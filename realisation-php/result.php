<?php

$Q1=$_POST["Q1"]?? "";
$Q2=$_POST["Q2"]?? "";
$Q3=$_POST["Q3"]?? "";

$score=0;

if($Q1==="PHP: Hypertext Preprocessor") $score++;
if($Q2==="PHP is a Front End code library") $score++;
if($Q3==="code1")$score++;

echo "<h2>your score is :$score /3</h2>";

if($score==3){
    echo "<p>Excelent</p>";
}
elseif($score==0){
    echo "<p>Revision necessary</p>";
}
else{
    echo "<p>keep trining</p>";
}

?>