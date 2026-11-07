<?php
// 1. Function returning a properly formatted full name
function formatFullName($first, $middle, $last) {
    return trim("$first $middle $last");
}
echo "Full Name: " . formatFullName("Jane", "A.", "Doe") . "<br><br>";

// 2. Function returning cleaned name parts as an array
function cleanNameArray($first, $middle, $last) {
    return [
        'first'  => trim($first),
        'middle' => trim($middle),
        'last'   => trim($last)
    ];
}
$nameParts = cleanNameArray("  John  ", " B. ", " Smith ");
echo "Cleaned First Name: " . $nameParts['first'] . "<br><br>";

// 3. Example demonstrating variable scope
$globalMessage = "I am global";
function testScope() {
    $localMessage = "I am local";
    echo $localMessage . "<br>";
}
testScope();
echo $globalMessage . "<br><br>";

// 4. Function using a static variable to generate sequential ticket numbers
function generateTicketNumber() {
    static $ticketNumber = 1000;
    $ticketNumber++;
    return "TICKET-" . $ticketNumber;
}
echo generateTicketNumber() . "<br>";
echo generateTicketNumber() . "<br>";
echo generateTicketNumber() . "<br><br>";

// 5. Basic User class with public properties and a method
class SimpleUser {
    public $username;
    public $role;

    public function getGreeting() {
        return "Hello, " . $this->username . " (" . $this->role . ")";
    }
}

$user1 = new SimpleUser();
$user1->username = "alex99";
$user1->role = "Student";
echo $user1->getGreeting() . "<br><br>";

// 6. Second User class with a constructor creating a password hash
class SecureUser {
    public $username;
    public $passwordHash;

    public function __construct($username, $plainPassword) {
        $this->username = $username;
        $this->passwordHash = password_hash($plainPassword, PASSWORD_DEFAULT);
    }
}

$secureUser = new SecureUser("secure_admin", "Secret123!");
echo "User: " . $secureUser->username . "<br>";
echo "Hashed Password: " . $secureUser->passwordHash . "<br>";
?>