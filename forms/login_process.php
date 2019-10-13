<?php
namespace Shadiyarovs;
session_start();

class User{
    public $parms;

    public function __construct()
    {
        $this->parms = $_POST;
    }

    public function validateInput(){
        //Validate form inputs: email, password
        //if correct then call Login method
        if (!$this->parms){
            return $this->redirect('login.php');
        }

        $email = $this->parms['email'];
        $password = $this->parms['password'];
        if ($email == 'jon@jon.com'){
            return $this->login();
        }
        return $this->redirect('login.php?msg=User is not authenticated');
    }

    public function login(){
        //Proceed with Login process
        $email = $this->parms['email'];
        $password = $this->parms['password'];
        $_SESSION['is_user_loggedin'] = true;
        $_SESSION['user_email'] = $email;
        $this->redirect('members.php');
    }

    public function redirect($url=null){
        header("Location:".$url);
    }

}

$login = new User();
$login->validateInput();