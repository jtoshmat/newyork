<?php
namespace Myitedu;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use Database\database;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require_once 'inc/database.php';

// Instantiation and passing `true` enables exceptions
//$mail = new PHPMailer(true);

class MyiteduMail{
    protected $mail;
    protected $to, $subject, $message;
    private $credentials;
    public function __construct($to, $subject='Your subject is blank', $message='Your message is blank')
    {
        $this->mail = new PHPMailer(true);
        $db = new database();
        $this->credentials = $db->sql("SELECT mail_username, mail_password FROM admin limit 1");
        $this->credentials = $this->credentials[0];
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
    }
    protected function connectToMail(){
        //Server settings
        //$this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = $this->credentials['mail_username'];                     // SMTP username
        $this->mail->Password   = $this->credentials['mail_password'];                               // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    }

    protected function configureMail(){
        //Recipients
        $this->connectToMail();
        $this->mail->setFrom('myiteducationinfo@gmail.com', 'MYITEDU');
        $this->mail->addAddress($this->to, 'Joe User');     // Add a recipient
        //$this->mail->addAddress('ellen@example.com');               // Name is optional
        $this->mail->addReplyTo('myiteducationinfo@gmail.com', 'Information');
        //$this->mail->addCC('cc@example.com');
        //$this->mail->addBCC('bcc@example.com');

        // Attachments
        //$this->mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    }

    protected function prepareMailContent(){
        // Content
        $this->configureMail();
        $this->mail->isHTML(true);                                  // Set email format to HTML
        $this->mail->Subject = $this->subject;
        $this->mail->Body    = $this->message;
        $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    }

    public function send(){
        try {
            $this->prepareMailContent();
            $status = $this->mail->send();
            return [
                'error' => false,
                'status' => $status
            ];
        }catch (Exception $e) {
            return [
                'error' => true,
                'status' =>  "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}"
            ];
        }
    }

}
