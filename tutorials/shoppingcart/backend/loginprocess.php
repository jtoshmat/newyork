<?php
namespace ShoppingCart;
require_once "database.php";
use Database\database;
class Loginprocess{
    protected $db;
    public $parms;
    protected $email, $password;

    public function __construct()
    {
        session_start();
        $this->db = new database('MY-IT-EDUCATION.US');
        $this->parms = $_POST;
        $this->email = $this->parms['email']??null;
        $this->password = $this->parms['password']??null;
        $this->validateFormInputs();
    }

    protected function validateFormInputs(){
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->redirect('http://newyork.local/tutorials/shoppingcart/login.php','Your email is in a wrong format');
        }
        if (empty($this->password)){
            $this->redirect('http://newyork.local/tutorials/shoppingcart/login.php','Your password is empty');
        }

        $hash_password = md5($this->password);
        $user = $this->db->sql("SELECT id, email, password FROM users WHERE email='$this->email' and password='$hash_password' limit 1");

        if(empty($user)){
            $this->redirect('http://newyork.local/tutorials/shoppingcart/login.php','Your credentials are incorrect');
        }
        $this->createUserSession($user);
        $this->redirect('http://newyork.local/tutorials/shoppingcart/index.php','Your Login is successfull');
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
$obj = new Loginprocess();
echo $obj->login();
