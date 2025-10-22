<!-- Convert numbers 1-10 to English words -->
<?php
function numberToWord($num) {
    $words = [
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine",
        10 => "Ten"
    ];

    if (isset($words[$num])) {
        return $words[$num];
    } else {
        return "Invalid number! Please enter a number between 1 and 10.";
    }
}

// Example usage
echo numberToWord(3);  // Three
echo "\n";
echo numberToWord(10); // Ten
echo "\n";
echo numberToWord(12); // Invalid number! Please enter a number between 1 and 10.
?>
