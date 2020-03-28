<?php
namespace MicroApple;
require_once '../database.php'; //Importing this database.php class
use Database\database;

class CommentBox{
    //Step 1: We will collect user input data from form - Done
    //Step 2: We will establish a connection with Database - Done
    //Step 3: We run an input validation - Done
    //Step 4: We save the user comment to Database
    //Step 5: We will redirect to March28.php after all is done successfully
    //The End
    public $parms; //Declaring parms properties
    private $db; //Declaring DB properties
    //Any methods start with __ (underscore) are called Magic Methods
    public function __construct()
    {
        //Assigning values to parms property
        $this->parms = $_POST;
        //Assigning value to db
        $this->db = new database();
    }
    public function __destruct()
    {
        //destroying the variable or properties
       unset($this->parms);
       unset($_POST);
    }
    private function validateUserData(){
        $this->parms['your_comment'] = strip_tags($this->parms['your_comment']);
    }
    public function saveUserData(){
        //Step 4: We are saving the user comment to DB
        if (strlen($this->parms['your_comment'])<3){
            return false;
        }
        $this->validateUserData();
        $sql = "INSERT INTO comments (comment) VALUES ('{$this->parms['your_comment']}')";
        $this->db->sql($sql);
        return $sql;
    }
}
$comment = new CommentBox();
if (!empty($comment->parms['your_comment'])){
    $comment->saveUserData();
}
//Step 5: We are redirecting the user to March 28.php
header('Location: http://newyork.local/projects/microapple/php/jon/march28.php?msg="Your comment has been saved successfully"');
exit;