<?php
    namespace Flights;

    include_once '../inc/database.php';
    use Database;



    class Api
    {
        public $partner;

        public $mydb;

        public function __construct()
        {
           $this->mydb = new Database\database();
        }


        public function setPartner($partner='expedia'){
            $this->partner = $partner;
        }

        public function getPartner(){
            return $this->partner;
        }

        public function search($parms){

            if ($this->partner=='priceline'){
                return 'This request is for Priceline';
            }

            if ($this->partner=='expedia'){
                return 'This request is for Expedia';
            }

            return 'Search Kayak DB';

        }



    }

