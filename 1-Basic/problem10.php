<!-- Calculate BMI and return category -->
<?php
function calculateBMI($weightKg, $heightCm) {
    // Convert height from cm to meters
    $heightM = $heightCm / 100;
    
    // Calculate BMI
    $bmi = $weightKg / ($heightM * $heightM);
    
    // Round BMI to 1 decimal place
    $bmi = round($bmi, 1);
    
    // Determine BMI category
    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $category = "Normal weight";
    } elseif ($bmi >= 25 && $bmi < 30) {
        $category = "Overweight";
    } else {
        $category = "Obese";
    }
    
    return [
        'bmi' => $bmi,
        'category' => $category
    ];
}

// Example usage
$result = calculateBMI(70, 175); // 70kg, 175cm
echo "BMI: " . $result['bmi'] . ", Category: " . $result['category'];
?>
