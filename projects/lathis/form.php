<?php
class Form {
    //properties
    public $firstname;
    public $lastname;
    public $gender;
    public $plateno;
    public $phoneno;
    public $birthday;


    public function __construct($firstname, $lastname, $gender, $plateno, $phoneno, $birthday)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
        $this->plateno = $plateno;
        $this->phoneno = $phoneno;
        $this->birthday = $birthday;
    }

    //methods
    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}