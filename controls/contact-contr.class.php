<?php


class Contact  { //for updating the database inserting creating tabeles

    
    
    private $mail;
    private $message;
    private $phone  ;


    public function __construct($mail,$phone,$message){
        $this->message =$message;
        $this->phone =$phone;
        $this->mail =$mail;
        
    }

    public function sendMail(){
            if($this->emptyInput()==false){
                return "pls enter all sections!";
            }elseif($this->valid_Email()== false){
                return "unvalid email!";
            }elseif($this->valid_phone()==false){
                return "pls check your phone number!";
            }
            else{
                require_once "../Mailer/mail.php";
                $mail->setFrom('mohamedzerouali203@gmail.com', 'aziz');
                $mail->addAddress('abdelazizlounes2@gmail.com');   
                $mail->Subject = 'Another contact from our clients:';
                $mail->Body    = 'MESSAGE: ' .$this->message . '/ phone:' . $this->phone. ' /Email:'.$this->mail;
                $mail->send();
                return "email sent";
            }
    }
    protected function emptyInput(){
        
        if(empty($this->phone) || empty($this->mail) || empty($this->message)){
            return false;

        }
        else{
            return true;
        }
    }

    protected function valid_phone(){
        if(!preg_match("/^[0-9][0-9]{9}$/",$this->phone)){
            $phone_match = false;

        }else{
            $phone_match =true;
        }
        return $phone_match;
    }

    protected function valid_Email(){

        if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

   
}