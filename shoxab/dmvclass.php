<?php



class dmvclass
{
    protected $db;
    protected $keyword;

    public function __construct()
    {
        $this->keyword = $_GET['keyword'] ?? null;
    }


    public function getCars()
    {

    }

}