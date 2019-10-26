<?php
namespace Uzbank;
session_start(['cookie_lifetime' => 3600]);
use Database\database;

include_once '../inc/database.php';

class Bankcard{

    private $db;
    public $parms;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_POST;
        $this->validateInputs();
    }

    private function validateInputs(){
        $this->parms['cardnumber'] = (int) $this->parms['cardnumber'];
        $this->parms['pin'] = (int) $this->parms['pin'];
    }

    public function findCard(){
        return $this->db->sql("SELECT * FROM bank_cards WHERE number='".$this->parms['cardnumber']."' and pin = '".$this->parms['pin']."' limit 1");
    }
}
$obj = new Bankcard();
$account = $obj->findCard();

if (!count($account)){
    $_SESSION['msg'] =[
        'error_type' => 403,
        'message' => "Your card validation failed",
    ];
    header("Location: index.php");
    exit;
}else{
    $_SESSION['msg'] =[
        'cardholder_name' => $account[0]['cardholder_name'],
        'cardholder_id' => $account[0]['id'],
        'error_type' => 200,
        'message' => "Your card validation is successful",
    ];
    header("Location: dashboard.php");
    exit;
}