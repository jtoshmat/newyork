<?php
    namespace Usa;
    include_once 'state.php';
    class city extends state
    {
        public function printVotingAge(){
            return $this->votingAge;
        }

        public function setVotingAge()
        {
            $this->votingAge = 23;

        }
    }

    $state = new city();
