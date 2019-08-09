<?php
namespace iowa;
use iowa\desmoines;
use wisconsin\cedarrapids;

class dubuque
{
    protected $x;
    protected $y;
    protected $operator;
    public $error;
    public $result;

    public function __construct()
    {
        include_once 'desmoines.php';
        include_once 'cedarrapids.php';
        $this->x = (int) $_GET['x']; //by default 0;
        $this->y = (int) $_GET['y']; //by default 0;
        $this->operator = (int) $_GET['operator']; //by default 0;

        if ($this->operator ==0 || $this->operator>4){
            return $this->throwError('We only accept the number between 1 and 4 for the operator');
        }
        $this->calculate();
    }
    public function getParms(){
        return [
            'x' => $this->x,
            'y' => $this->y,
            'operator' => $this->operator,
        ];
    }
    public function throwError($msg){
        if ($msg) {
            $this->error = "Error: " . $msg;
        }
        return false;
    }
    public function displayError(){
        return $this->error??null;
    }
    protected function calculate(){
        switch ($this->operator){
            case 1:
                $this->operator = "+";
                break;
            case 2:
                $this->operator = "-";
                break;
            case 3:
                $this->operator = "*";
                break;
            case 4:
                $this->operator = "/";
                break;
        }

        $math = ("return $this->x  $this->operator  $this->y;");
        $this->result = eval($math);
        //$this->result = eval("return $this->x . $this->operator . $this->y;");
    }
    public function practicingMyOop(){
        $mydesmoines = new desmoines();
        $mycedarrapids = new cedarrapids();
        return $mydesmoines->sayHello()." <hr>". $mycedarrapids->sayHello();
    }
}
$burnett = new dubuque();
echo $burnett->displayError();
echo "<hr>";
//print_r($burnett->result);

print_r($burnett->practicingMyOop());

/*
 * Functions, - Covered
 * return - covered
 * parms - covered
 * namespaces - covered
 * interface
 * abstract class
 * anonymous functions
 * traits
 */