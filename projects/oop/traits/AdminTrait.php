<?php

trait AdminTrait{
    public function deleteUser(){
        return "The admin is deleting a user";
    }

    public function blockUser(){
        return "The admin is blocking a user";
    }

    public function isUserAdmin(){
        $user = new stdClass();
        $user->admin = true;

        if (!$user->admin){
        echo "<h1>You are not authorized to display page</h1>";
        exit("No, the user is not an Admin");
        }
        return true;
    }
}