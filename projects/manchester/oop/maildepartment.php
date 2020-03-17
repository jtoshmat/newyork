<?php
namespace Marvel;
class MailDepartment
{
    public function acceptMails(){
        echo "<hr>Step 1: Accepting Section<hr>";
        $status = $this->validateMail();

        if ($status['are_there_are_any_errors']==true){
            return [
                'are_there_are_any_errors' =>true,
                'code' => 200,
                'msg' => $status['msg']
            ];
        }else{
            return [
                'are_there_are_any_errors' => false,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function validateMail(){
        echo "Step 2: Validating Section<hr>";

        //Har hil ish jaryonlar va hokazo
        return [
            'are_there_are_any_errors' => true,
            'code' => 500,
            'msg' => 'Your envelope is not the same format like USA'
        ];

        $status = $this->stampMail();
        if ($status['are_there_are_any_errors']){
            return [
                'are_there_are_any_errors' =>true,
                'code' => 200,
                'msg' => $status['msg']
            ];
        }else{
            return [
                'are_there_are_any_errors' => false,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function stampMail(){
        echo "Step 3: Stamping Section <hr>";
        $status = $this->sendMail();
        if ($status['are_there_are_any_errors']){
            return [
                'are_there_are_any_errors' =>true,
                'code' => 200,
                'msg' => $status['msg']
            ];
        }else{
            return [
                'are_there_are_any_errors' => false,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function sendMail(){
        echo "Step 4: Sending Section<hr>";
        //Har hil ish jaryonlar va hokazo
        return [
            'are_there_are_any_errors' => true,
            'code' => 500,
            'msg' => 'Your mail was not sent because you misstyped gmail, instead you typed gml.com'
        ];
        $status = $this->sendConfirmation();
        if ($status['are_there_are_any_errors']==true){
            return [
                'are_there_are_any_errors' =>true,
                'code' => 200,
                'msg' => $status['msg']
            ];
        }else{
            return [
                'are_there_are_any_errors' => false,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function sendConfirmation(){
        echo "Step 5: Confirmation Section<hr>";

        /*
         * ha hil etaplar, function va har hil ishlar buladi.
         */

        return [
            'are_there_are_any_errors' => false,
            'code' => 500,
            'msg' => 'Congratulations, your application has been approved and you will be getting your card in the mail in the next 3-4 weeks'
            //'msg' => 'Sorry, your application has been rejected because we need more documents from you.'
        ];
    }
}