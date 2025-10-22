 <!-- Determine access level based on age ranges -->
<?php
function getAccessLevel($age) {
    if ($age < 0) {
        return "Invalid age";
    } elseif ($age < 13) {
        return "Child Access";
    } elseif ($age >= 13 && $age < 18) {
        return "Teen Access";
    } elseif ($age >= 18 && $age < 60) {
        return "Adult Access";
    } else {
        return "Senior Access";
    }
}

// Example usage
echo getAccessLevel(10); // Child Access
echo "\n";
echo getAccessLevel(15); // Teen Access
echo "\n";
echo getAccessLevel(25); // Adult Access
echo "\n";
echo getAccessLevel(70); // Senior Access
?>
