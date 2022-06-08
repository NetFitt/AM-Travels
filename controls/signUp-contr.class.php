<?php


class SignupContr extends Signup { //for updating the database inserting creating tabeles

    private $user;
    private $pwd;
    private $pwd_rep;
    private $mail;
    private $code;
    private $random  ;


    public function __construct($user,$pwd,$pwd_rep,$mail,$code,$random){
        $this->user =$user;
        $this->pwd =$pwd;
        $this->pwd_rep =$pwd_rep;
        $this->mail =$mail;
        $this->code =$code;
        $this->random =$random;
    }

    public function signupUser(){

        if($this->emptyinputes()==false){
            return "pls Fill all the feilds!!";
        }elseif($this->checkUser($this->user)==false){
            return "user name already exist! try another one";
        }elseif($this->short_pwd()==false){
            return "password is too short! (must be more than 8 char)";
        }elseif($this->pwd_matched($this->pwd)==false){
            return "password does not match !";
        }elseif($this->valid_Email($this->mail)==false){
            return "Email isnt valid !";
        }elseif($this->checkEmail($this->mail)==false){
            return "Email already exists !";
        }else{
            
            $rand =rand(100000,999999);
            require_once "../Mailer/mail.php";
             $mail->setFrom('mohamedzerouali203@gmail.com', 'aziz');
             $mail->addAddress($this->mail);   
             $mail->Subject = 'verification code AM-TRAVEL';
             $mail->Body    = 'your verification code is : ' .$rand;
             $mail->send();
            return $rand;
        }

    }

    public function very_code(){

        if($this->code == $this->random){
            if($this->checkEmail($this->mail)==true||$this->checkUser($this->user)==true){
                $this->setUser($this->user,$this->pwd,$this->mail);
                return "its added successfuly";
            }else{
                return "its already been added!";
            }
        }else{
            return "the code that you enterd is wrong!";
        }
       

        
       
    }
    


    //
    protected function pwd_matched(){

        if($this->pwd != $this->pwd_rep){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    // empty inputs error
    protected function emptyinputes(){

        if(empty($this->pwd)||empty($this->user )|| empty($this->pwd_rep )||empty($this->mail )){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    // password char error
    protected function short_pwd(){

        if(strlen($this->pwd)<8){
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    // password char error
    protected function valid_Email(){

        if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}