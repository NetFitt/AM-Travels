<?php


class DBH{
    private $host="localhost";
    private $user="mohamed";
    private $pwd="123";
    private $dbname="am-travel";

    protected function connect() {
        try{
        $dsn ='mysql:host=' . $this->host . ';dbname=' . $this->dbname;       
        $pdo = new PDO($dsn , $this->user , $this->pwd );
        return $pdo;       
        }catch(PDOException $e){
            print "Error!".$e->getMessage()."<br/>";
        }
        
    }
    public function getconnect(){
        return $this->connect();

    }



}
