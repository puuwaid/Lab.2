<?php

// 1. Function that removes extra spaces
function cleanText($text) {
    return trim(preg_replace('/\s+/', ' ', $text));
}


// 2. User class
class User {

    public $name;
    public $email;
    public $status;

    // Class constant
    public const STATUS_ACTIVE = "Active";

    // Constructor
    public function __construct($name, $email) {

        $this->name = cleanText($name);

        $this->email = strtolower(trim($email));

        $this->status = self::STATUS_ACTIVE;
    }
}


// 3. Tutor class extending User
class Tutor extends User {

    public $subject;

    public function __construct($name, $email, $subject) {

        // Call the parent User constructor
        parent::__construct($name, $email);

        $this->subject = cleanText($subject);
    }

    // Method returning tutor profile information
    public function profileSummary() {

        return "<h2>Tutor Profile</h2>" .
            "<p>Name: " . htmlspecialchars($this->name) . "</p>" .
            "<p>Email: " . htmlspecialchars($this->email) . "</p>" .
            "<p>Subject: " . htmlspecialchars($this->subject) . "</p>" .
            "<p>Status: " . htmlspecialchars($this->status) . "</p>";
    }
}


// 4. Create a Tutor object with sample data
$tutor = new Tutor(
    "  David    Smith  ",
    "David@GMAIL.COM",
    "Computer Science"
);


// 5. Display the tutor profile in the browser
echo $tutor->profileSummary();

?>