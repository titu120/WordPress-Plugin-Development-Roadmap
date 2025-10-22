<!-- Convert between Celsius and Fahrenheit -->
<?php
function convertTemperature($value, $unit) {
    $unit = strtoupper($unit); // make case-insensitive

    if ($unit === 'C') {
        // Celsius to Fahrenheit
        return $value * 9 / 5 + 32;
    } elseif ($unit === 'F') {
        // Fahrenheit to Celsius
        return ($value - 32) * 5 / 9;
    } else {
        return "Invalid unit! Use 'C' for Celsius or 'F' for Fahrenheit.";
    }
}

// Example usage
echo "25°C → " . convertTemperature(25, 'C') . "°F\n"; // 77°F
echo "77°F → " . convertTemperature(77, 'F') . "°C\n"; // 25°C
echo convertTemperature(100, 'X'); // Invalid unit! Use 'C' or 'F'.
?>
