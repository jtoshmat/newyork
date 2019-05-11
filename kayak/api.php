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


        public function setPartner($partner=[]){
            $this->partner = $partner;
        }

        public function getPartner(){
            return $this->partner;
        }

        public function search($parms){
            $partners = $this->getPartner();
            $output = [];
            foreach ($partners as $num=>$partner){
                $output[] = $this->executeSearch("select * from $partner where from_city='".$parms['from_city']."' and to_city='".$parms['to_city']."'", $partner);
            }
            return $output;
        }


        protected function executeSearch($sql, $partner){
            $db = $this->mydb;
            $results = $db->sql($sql);
            $data = [];
            $logo = null;

            if ($partner=='expedia'){
                $logo = "https://blog.equityroots.com/wp-content/uploads/2017/10/expedia-logo.png";
            }

            if ($partner=='priceline'){
                $logo = "https://cdn.promocodes.com/img/merchants/253/360-logo/v3/priceline-coupons.png";
            }

            foreach ($results as $flight){
                $data[] = [
                    'from_city' => $flight['from_city'],
                    'to_city' => $flight['to_city'],
                    'class' => $flight['class'],
                    'partner' => $partner,
                    'logo' => $logo,
                    'price' => $flight['price']
                ];
            }

            return $data;
        }



    }

