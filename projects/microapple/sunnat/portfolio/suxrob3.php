<?php


namespace Club;

class Football
{
    private $club = 'Juventus';


    public function __construct($team)
    {
        $this->club = $team;

    }


    public function __get($obj)
    {
        return $this->$obj;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;

    }
}

$result = new Football('Manchester');
echo $result->club;
echo "<hr>";
echo $result->club = 'Real Madrid';
