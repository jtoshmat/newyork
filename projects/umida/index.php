<?php

<<<<<<< HEAD

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
=======
var_dump($_REQUEST);
>>>>>>> 7d798a2fbc9080cc3492481d17a281021556f919
