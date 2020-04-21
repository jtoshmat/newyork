<?php
namespace ShoppingCart;
require_once 'myitedumail.php';
use Myitedu\MyiteduMail;


class Mail{
    public $mail;
    public function sendMail($to, $subject, $msg){
        $this->mail = new MyiteduMail($to, $subject, $msg);

    }
}
$obj = new Mail();
$obj->sendMail('jontoshmatov@yahoo.com','Your checkout items','Thank you for shopping at MYITEDU Online Store');
echo "Your email has been sent";
?>

