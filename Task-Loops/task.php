<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-------------  3.1 -------------->
    <?php
    echo implode(range(1, 10));
    echo '<hr>';
    $numbers = "";
    for ($i = 0; $i <= 10; $i++) {
        $numbers .= $i . "-";
    }
    echo rtrim($numbers, "-");

    ?>
    <hr>

    <!-------------  3.2 -------------->
    <?php
    $number = 0;
    for ($i = 0; $i <= 30; $i++) {
        $number += $i;
    }
    echo $number;

    ?>
    <hr>
    <!-------------  3.3 -------------->
    <?php
    for ($i = 1; $i <= 5; $i++) {
        // Outer loop to handle rows
        for ($j = 1; $j <= 5; $j++) {
            // Inner loop to handle columns
            if ($j <= 5 - $i) {
                echo "A ";
            } else {
                // Print the letter corresponding to the row number (A, B, C, etc.)
                echo chr(64 + $i) . " ";  // chr(65) is 'A', chr(66) is 'B', and so on.
            }
        }
        echo "<br>"; // Move to the next line after each row
    }

    ?>
    <hr>
    <!-------------  3.4 -------------->
    <?php
    for ($i = 1; $i <= 5; $i++) {
        // Outer loop to handle rows
        for ($j = 1; $j <= 5; $j++) {
            // Inner loop to handle columns
            if ($j <= 5 - $i) {
                echo "1 ";  // Print "1" for the left part of the pattern
            } else {
                echo $i . " ";  // Print the current row number for the right part
            }
        }
        echo "<br>";  // Move to the next line after each row
    }

    ?>
    <hr>
    <!-------------  3.5 -------------->
    <?php
    for ($i = 1; $i <= 5; $i++) {
        // Outer loop to handle rows
        for ($j = 1; $j <= 5; $j++) {
            // Inner loop to handle columns
            if ($i == $j) {
                echo $j . " ";  // Print the row number if it's the diagonal
            } else {
                echo "0 ";  // Print "0" for all other positions
            }
        }
        echo "<br>";  // Move to the next line after each row
    }
    ?>
    <hr>

</body>

</html>