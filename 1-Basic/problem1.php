<!-- Check if number is positive, even, and greater than 100 -->
<?php
function checkNumber($num) {
    if ($num > 0 && $num % 2 == 0 && $num > 100) {
        return "The number $num is positive, even, and greater than 100.";
    } else {
        return "The number $num does not meet all the conditions.";
    }
}

// Example usage
echo checkNumber(150); // The number 150 is positive, even, and greater than 100.
echo "\n";
echo checkNumber(75);  // The number 75 does not meet all the conditions.
?>
