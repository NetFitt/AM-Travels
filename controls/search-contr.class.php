<?php

class SearchContr extends Search { //for updating the database inserting creating tabeles

    private $location;
  

    public function __construct($location){
        $this->location =$location;


       
    }
    public function searchPage(){
        if(strlen($this->location)==0){
            exit();
       }else{
           return $this->getLocation($this->location);
       }
    }


}