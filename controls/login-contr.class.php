<?php

class LoginContr extends Login { //for updating the database inserting creating tabeles

    private $user;
    private $pwd;

    public function __construct($user,$pwd){
        $this->user =$user;
        $this->pwd =$pwd;
    }
    public function LoginUser(){

        if($this->emptyinputes()==false){
            return "empty values !";
            
        }
        
        return $this->getUser($this->user,$this->pwd);
       
    }


    protected function emptyinputes(){
        
        if(empty($this->pwd) || empty($this->user)){

            $result=false;
        
        }else{
            $result=true;
        }
        return $result;
    }

}