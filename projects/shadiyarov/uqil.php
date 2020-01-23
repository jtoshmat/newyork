<?php
namespace Shadiyarovs;
include_once 'Otabuyruklar.php';
include_once 'Onabuyruqlari.php';
class Uqil implements \Otabuyruklar, \Onabuyruqlari {


    public function verandaQur()
    {
       return "Hop dadajon, man quraman usha veranda";
    }

    public function erniChop()
    {
        return "Man erni chppinb quydim";
    }


    public function novosniSot()
    {
        return "dada, novbi $2,000 sotdim";
    }

    public function kechkurunKuchagaChiqishYok()
    {
        return "uzr dada, boshqa qaytalimaydi";
    }

    public function uzbekQizigaUylansan()
    {
        return "Hop, oyjon, man Uzbek qiziga uylanamn, shu mahhaladan busa yana ham yaxshi";
    }
}

$ugil = new Uqil();

echo $ugil->uzbekQizigaUylansan();


