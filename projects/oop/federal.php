<?php
    namespace Usa;

    class federal
    {
        public $votingAge;

        protected $name;

        public function __construct()
        {
            $this->setVotingAge();
            $this->name = "Jon Toshmatov";
        }

        public function setVotingAge(){
            $this->votingAge = 21;
        }

        public function getVotingAge(){
            return $this->votingAge;
        }

        public function goodOnlyInDC(){
            echo "Washington DC only";
        }

    }

    $federal = new federal();

    var_dump($federal);
