<?php

trait AdminTravelTrait{
    public function removeUser(){
        return "Administrator deleted the user";
    }
    public function addUser(){
        return "Administrator added the user";
    }

    public function checkAdminAccess(){
        $user = new stdClass();
        $user->admin=true;

        if (!$user->admin){
            echo "Hello Admin";}

        else {
            exit("Please Leave this page immediately");
        }
    }
}