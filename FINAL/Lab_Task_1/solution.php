<!DOCTYPE html>
<html>
<head>
    <title>Grade sheet</title>
</head>
<body>


<?php

    $marks=40;
    if ($marks >= 90 && $marks <= 100) {
        $grade = "A+";
        $point = "4.00";
    } elseif ($marks >= 85 && $marks < 90) {
        $grade = "A";
        $point = "3.75";
    } elseif ($marks >= 80 && $marks < 85) {
        $grade = "B+";
        $point = "3.50";
    } elseif ($marks >= 75 && $marks < 80) {
        $grade = "B";
        $point = "3.25";
    } elseif ($marks >= 70 && $marks < 75) {
        $grade = "C+";
        $point = "3.00";
    } elseif ($marks >= 65 && $marks < 70) {
        $grade = "C";
        $point = "2.75";
    } elseif ($marks >= 60 && $marks < 65) {
        $grade = "D+";
        $point = "2.50";
    } elseif ($marks >= 50 && $marks < 60) {
        $grade = "D";
        $point = "2.25";
    } else {
        $grade = "F";
        $point = "0.00";
    }

    echo "<h3>Marks: $marks%</h3>";
    echo "<p>Letter Grade: <b>$grade</p>";
    echo "<p>Grade Point: <b>$point</p>";

?>

</body>
</html>
