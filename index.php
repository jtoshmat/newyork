<?php

class Sleeper
{
    protected $_age;
    protected $_HeadCap;
    private $_FavoriteColor;
    public $_tastes;

    public function __construct()
    {
        $this->_age = 21;
        $this->_HeadCap = true;
        $this->_FavoriteColor = 'red';
        $this->_tastes = array('Music', 'cinema', 'curling');
    }

    public function __sleep()
    {
        echo 'SLEEP.';
        return array('_age', '_HeadCap', '_FavoriteColor','_tastes');
    }

    public function __wakeup()
    {
        echo 'WAKEUP';
        $this->_age = 19;

    }

    public function doSomething(){
        return $this->_age;
    }
}

$obj = new Sleeper();

$jon = serialize($obj);

print_r($jon);
echo "<hr>";

$jon2 = unserialize($jon);
print_r($jon2->doSomething());