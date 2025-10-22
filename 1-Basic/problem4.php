<?php
function isLeapYear($year) {
    if ($year % 4 != 0) {
        // Not divisible by 4 → not a leap year
        return false;
    } elseif ($year % 100 != 0) {
        // Divisible by 4 but not by 100 → leap year
        return true;
    } elseif ($year % 400 == 0) {
        // Divisible by 100 and 400 → leap year
        return true;
    } else {
        // Divisible by 100 but not 400 → not a leap year
        return false;
    }
}

// Example usage
$years = [1900, 2000, 2004, 2100, 2025];
foreach ($years as $y) {
    echo $y . " → " . (isLeapYear($y) ? "Leap Year" : "Not Leap Year") . "\n";
}
?>
