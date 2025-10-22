<!-- Find largest of three numbers without max() function -->
<?php
function largestOfThree($a, $b, $c) {
    $largest = $a; // assume $a is largest

    if ($b > $largest) {
        $largest = $b;
    }
    if ($c > $largest) {
        $largest = $c;
    }

    return $largest;
}

// Example usage
echo largestOfThree(10, 25, 15); // 25
echo "\n";
echo largestOfThree(-5, -10, -3); // -3
?>
