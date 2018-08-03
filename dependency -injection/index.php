<?php

//https://code.tutsplus.com/tutorials/dependency-injection-in-php--net-28146
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Author {
    private $firstName;
    private $lastName;
    private $someName;

    public function __construct($firstName, $lastName, $someName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
}

class Question {
    private $author;
    private $question;

    public function __construct($question, Author $author) {
        $this->author = $author;
        $this->question = $question;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getQuestion() {
        return $this->question;
    }
}

$rr=new Question('What is your name?', new Author('Bohdan','Varvarych','some name') );

echo '<pre>';
print_r( $rr->getQuestion().','. $rr->getAuthor()->getFirstName());
echo '</pre>';
die();
;