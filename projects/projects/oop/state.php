<?php
    namespace Usa;
    include_once 'federal.php';
    class state extends federal
    {
        public function setVotingAge(){
            $this->votingAge = 99;
        }
    }

    $state = new state();


    var_dump($state);


