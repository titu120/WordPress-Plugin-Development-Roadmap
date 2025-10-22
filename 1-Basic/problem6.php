<!-- Convert number 1-7 to day name with error handling -->
<?php
function numberToDay($num) {
    $days = [
        1 => "Monday",
        2 => "Tuesday",
        3 => "Wednesday",
        4 => "Thursday",
        5 => "Friday",
        6 => "Saturday",
        7 => "Sunday"
    ];

    if (isset($days[$num])) {
        return $days[$num];
    } else {
        return "Invalid number! Please enter a number between 1 and 7.";
    }
}

// Example usage
echo numberToDay(3); // Wednesday
echo "\n";
echo numberToDay(7); // Sunday
echo "\n";
echo numberToDay(10); // Invalid number! Please enter a number between 1 and 7.
?>
