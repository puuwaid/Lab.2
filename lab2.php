<?php

// 1. Arithmetic expression using variables, operators, parentheses, and abs()
$val1 = -15;
$val2 = 5;

$result = abs(($val1 + 10) * $val2);

echo "<h2>1. Arithmetic Expression</h2>";
echo "Arithmetic Result: $result<br><br>";


// 2. Boolean comparisons using == and ===
$numString = "10";
$numInteger = 10;

echo "<h2>2. Boolean Comparisons</h2>";

echo "Loose (==): " .
    ($numString == $numInteger ? "True" : "False") . "<br>";

echo "Strict (===): " .
    ($numString === $numInteger ? "True" : "False") . "<br><br>";


// 3. Unary operators, including incrementing a variable
echo "<h2>3. Unary Operators</h2>";

$counter = 5;
$counter++;

echo "Incremented Counter: $counter<br><br>";


// 4. Operator precedence and parentheses
echo "<h2>4. Operator Precedence</h2>";

$calc1 = 2 + 3 * 4;
$calc2 = (2 + 3) * 4;

echo "Without Parentheses: $calc1<br>";
echo "With Parentheses: $calc2<br><br>";


// 5. Logical operators: &&, ||, and !
echo "<h2>5. Logical Operators</h2>";

$age = 21;
$hasID = true;
$isStudent = false;

echo "Can Enter: " .
    (($age >= 21 && $hasID) ? "Yes" : "No") . "<br>";

echo "Discount Available: " .
    (($isStudent || $age < 18) ? "Yes" : "No") . "<br>";

echo "Not a Student: " .
    (!$isStudent ? "True" : "False") . "<br><br>";


// 6. If...else statement for scholarship eligibility
echo "<h2>6. Scholarship Eligibility</h2>";

$gpa = 3.6;

if ($gpa >= 3.0) {
    echo "Eligible for honors program.<br><br>";
} else {
    echo "Not eligible for honors program.<br><br>";
}


// 7. If...elseif...else for scholarship levels
echo "<h2>7. Scholarship Status</h2>";

if ($gpa >= 3.8) {
    echo "Full Scholarship<br><br>";
} elseif ($gpa >= 3.0) {
    echo "Partial Scholarship<br><br>";
} else {
    echo "No Scholarship<br><br>";
}


// 8. Switch statement for access status
echo "<h2>8. Access Status</h2>";

$accessStatus = "admin";

switch ($accessStatus) {
    case "admin":
        echo "Access Level: Full Administrative Access<br>";
        break;

    case "user":
        echo "Access Level: Standard User Access<br>";
        break;

    case "guest":
        echo "Access Level: Guest Access<br>";
        break;

    default:
        echo "Access Level: Unknown<br>";
        break;
}

echo "<br>";


// 9. While loop repeating while fuel remains above 10
echo "<h2>9. While Loop - Fuel Levels</h2>";

$fuel = 50;

while ($fuel > 10) {
    echo "Fuel level: $fuel% - Driving...<br>";
    $fuel -= 15;
}

echo "Low fuel warning reached!<br><br>";


// 10. For loop displaying a multiplication table
echo "<h2>10. Multiplication Table</h2>";

echo "<strong>5x Multiplication Table:</strong><br>";

for ($i = 1; $i <= 5; $i++) {
    $product = 5 * $i;
    echo "5 x $i = $product<br>";
}

?>