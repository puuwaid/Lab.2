<?php
// 1. Arithmetic expression using variables, operators, parentheses, and abs()
$val1 = -15;
$val2 = 5;
$result = abs(($val1 + 10) * $val2);
echo "Arithmetic Result: $result <br><br>";

// 2. Boolean comparisons using == and ===
$numString = "10";
$numInteger = 10;
echo "Loose (==): " . ($numString == $numInteger ? "True" : "False") . "<br>";
echo "Strict (===): " . ($numString === $numInteger ? "True" : "False") . "<br><br>";

// 3. Unary operators, including incrementing a variable
$counter = 5;
$counter++;
echo "Incremented Counter: $counter <br><br>";

// 4. Operator precedence and parentheses
$calc1 = 2 + 3 * 4;     // Equals 14
$calc2 = (2 + 3) * 4;   // Equals 20
echo "Without Parentheses: $calc1 | With Parentheses: $calc2 <br><br>";

// 5. Logical operators: &&, ||, and !
$hasHighGPA = true;
$hasDisciplineRecord = false;
if ($hasHighGPA && !$hasDisciplineRecord) {
    echo "Eligible for honors program.<br><br>";
}

// 6. If...else statement determining scholarship eligibility from GPA
$gpa = 3.6;
if ($gpa >= 3.5) {
    echo "Eligible for general scholarship.<br>";
} else {
    echo "Not eligible for general scholarship.<br>";
}
echo "<br>";

// 7. If...elseif...else statement determining full, partial, or no scholarship
if ($gpa >= 3.8) {
    echo "Scholarship Status: Full Scholarship<br>";
} elseif ($gpa >= 3.2) {
    echo "Scholarship Status: Partial Scholarship<br>";
} else {
    echo "Scholarship Status: No Scholarship<br>";
}
echo "<br>";

// 8. Switch statement displaying a message based on access status
$accessStatus = "admin";
switch ($accessStatus) {
    case "admin":
        echo "Access Level: Full Administrative Access<br>";
        break;
    case "tutor":
        echo "Access Level: Tutor Portal Access<br>";
        break;
    default:
        echo "Access Level: Guest Access<br>";
        break;
}
echo "<br>";

// 9. While loop repeating while fuel remains above a stated level
$fuel = 50;
while ($fuel > 10) {
    echo "Fuel level: $fuel% - Driving...<br>";
    $fuel -= 15;
}
echo "Low fuel warning reached!<br><br>";

// 10. For loop displaying a multiplication table
echo "<strong>5x Multiplication Table:</strong><br>";
for ($i = 1; $i <= 5; $i++) {
    $product = 5 * $i;
    echo "5 x $i = $product <br>";
}
?>