<!-- Perform basic arithmetic operations based on operator -->
<?php
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero!";
            }
            return $num1 / $num2;
        case '%':
            if ($num2 == 0) {
                return "Error: Modulus by zero!";
            }
            return $num1 % $num2;
        default:
            return "Invalid operator! Use +, -, *, /, or %.";
    }
}

// Example usage
echo calculate(10, 5, '+'); // 15
echo "\n";
echo calculate(10, 5, '-'); // 5
echo "\n";
echo calculate(10, 5, '*'); // 50
echo "\n";
echo calculate(10, 0, '/'); // Error: Division by zero!
echo "\n";
echo calculate(10, 3, '%'); // 1
?>
