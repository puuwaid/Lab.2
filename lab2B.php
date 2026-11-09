<?php

// 1. Function that formats a full name
function fullName($first, $middle, $last) {
    return trim("$first $middle $last");
}

echo "<h2>1. Full Name Function</h2>";

echo fullName("Sam", "Michael", "Frank");

echo "<br><br>";


// 2. Function that returns cleaned name parts as an array
function cleanNameParts($first, $middle, $last) {
    return [
        "first" => trim($first),
        "middle" => trim($middle),
        "last" => trim($last)
    ];
}

echo "<h2>2. Clean Name Parts</h2>";

$nameParts = cleanNameParts(" Sam ", " Michael ", " Frank ");

echo "Array ( ";
foreach ($nameParts as $key => $value) {
    echo "[$key] => $value ";
}
echo ")<br><br>";


// 3. Demonstrating variable scope
echo "<h2>3. Variable Scope</h2>";

$message = "Ben Smith";

function showScope() {
    $localMessage = "John Smith";
    echo $localMessage . "<br>";
}

echo $message . "<br>";
showScope();

echo "<br>";


// 4. Static variable generating sequential ticket numbers
echo "<h2>4. Ticket Numbers</h2>";

function generateTicketNumber() {
    static $ticketNumber = 1000;
    $ticketNumber++;

    return $ticketNumber;
}

echo generateTicketNumber() . "<br>";
echo generateTicketNumber() . "<br>";
echo generateTicketNumber() . "<br>";

echo "<br>";


// 5. User class with public properties and a method
echo "<h2>5. User Class</h2>";

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function displayInfo() {
        return "Name: " . $this->name .
               " | Email: " . $this->email;
    }
}

$user1 = new User("David Smith", "david@gmail.com");

echo $user1->displayInfo();

echo "<br><br>";


// 6. Secure User class with password hashing
echo "<h2>6. Secure User Class</h2>";

class SecureUser {
    private $username;
    private $passwordHash;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->passwordHash = password_hash(
            $password,
            PASSWORD_DEFAULT
        );
    }

    public function displayUsername() {
        return "Username: " . $this->username;
    }

    public function verifyPassword($password) {
        return password_verify(
            $password,
            $this->passwordHash
        );
    }
}

$user2 = new SecureUser("student123", "MyPassword123");

echo $user2->displayUsername() . "<br>";

echo "Password hash created successfully!<br>";

echo "Password verification: " .
    ($user2->verifyPassword("MyPassword123") ? "Successful" : "Failed");

echo "<br>";

?>