<?php
// 1. cleanText function
function cleanText($text) {
    return trim(preg_replace('/\s+/', ' ', $text));
}

// 2. Base User class
class User {
    const STATUS_ACTIVE = 'active';

    public $name;
    public $email;
    public $status;

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
        parent::__construct($name, $email);
        $this->subject = cleanText($subject);
    }

    public function profileSummary() {
        return "Tutor Summary: " . $this->name . " | Email: " . $this->email . " | Subject: " . $this->subject . " | Status: " . $this->status;
    }
}

// 4. Instantiate and display a Tutor object
$tutor = new Tutor("  Sarah   Connor ", "  SARAH.C@EXAMPLE.COM ", " Computer Science ");
echo $tutor->profileSummary();
?>