<?php
namespace Gaybullaevs;
include_once 'Myfather.php';
include_once 'MyMother.php';
include_once 'startbusiness.php';
include_once 'Traits/ToolsTrait.php';


class Son extends Startbusiness implements \Myfather, \MyMother {

    use \ToolsTrait;

    public function ogorodniChop()
    {
        return "Hop ada, ogorodni chopib quydim!";
    }

    public function sellBull()
    {
        return "Novosni $2500 ga sotdim";
    }

    public function marryUzbekGirl()
    {
        return "Hop oyjon, Uzbek qiziga uylanaman!";
    }

    public function noMoreHangOutAtNight()
    {
        return "Adajon, uzr, mani kechirin, boshqa qaytailmidi!";
    }

}

$son = new Son();
echo $son->noMoreHangOutAtNight();

// We covered:   Interface, Traits, Abstract.
