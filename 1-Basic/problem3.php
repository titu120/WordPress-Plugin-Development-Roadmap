<?php
function getLetterGrade($score) {
    if ($score < 0 || $score > 100) {
        return "Invalid score";
    } elseif ($score >= 97) {
        return "A+";
    } elseif ($score >= 93) {
        return "A";
    } elseif ($score >= 90) {
        return "A-";
    } elseif ($score >= 87) {
        return "B+";
    } elseif ($score >= 83) {
        return "B";
    } elseif ($score >= 80) {
        return "B-";
    } elseif ($score >= 77) {
        return "C+";
    } elseif ($score >= 73) {
        return "C";
    } elseif ($score >= 70) {
        return "C-";
    } elseif ($score >= 67) {
        return "D+";
    } elseif ($score >= 63) {
        return "D";
    } elseif ($score >= 60) {
        return "D-";
    } else {
        return "F";
    }
}

// Example usage
echo getLetterGrade(95); // A
echo "\n";
echo getLetterGrade(88); // B+
echo "\n";
echo getLetterGrade(72); // C-
echo "\n";
echo getLetterGrade(55); // F
?>
