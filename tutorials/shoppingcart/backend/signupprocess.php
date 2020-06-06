<?php
namespace ShoppingCart;
require_once "database.php";
use Database\database;
class Signupprocess{
    protected $db;
    public $parms;
    protected $email, $password, $confirm_password;

    public function __construct()
    {
        session_start();
        $this->db = new database('MY-IT-EDUCATION.US');
        $this->parms = $_POST;
        $this->email = $this->parms['email']??null;
        $this->password = $this->parms['password']??null;
        $this->confirm_password = $this->parms['confirm_password']??null;
        $this->validateFormInputs();
    }

    protected function validateFormInputs(){
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->redirect('http://newyork.local/tutorials/shoppingcart/login.php','Your email is in a wrong format');
        }
        if (empty($this->password)){
            $this->redirect('http://newyork.local/tutorials/shoppingcart/login.php','Your password is empty');
        }

        if ($this->password!==$this->confirm_password){
            $this->redirect('http://newyork.local/tutorials/shoppingcart/signup.php','Your password does not match');
        }

        $hash_password = md5($this->password);
        $user = $this->db->sql("SELECT id, email FROM users WHERE email='$this->email' limit 1");

        if($user){
            $this->redirect('http://newyork.local/tutorials/shoppingcart/signup.php','This email has already been registered. Please use a different email address');
        }

        $create = $this->db->sql("INSERT INTO users (email,password) VALUES('$this->email','$hash_password');");
        $user = $this->db->sql("SELECT * FROM users WHERE email='$this->email' limit 1");
        $this->createUserSession($user);
        $this->redirect('http://newyork.local/tutorials/shoppingcart/index.php','Your account has been created');
    }

    private function createUserSession($user){
        $_SESSION['is_user_logged_in'] = true;
        $_SESSION['user'] = [
            'user_id' => $user[0]['id'],
            'name' => 'New User',
            'email' => $user[0]['email']
        ];
    }

    private function redirect($url, $msg){
        header("Location:".$url.'?msg='.$msg);
        exit("There are errors in your form");
    }


    public function login(){
        return 'WOHOOOOO SUCCESS';
    }

}
$obj = new Signupprocess();
echo $obj->login();
