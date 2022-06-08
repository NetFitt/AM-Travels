
<?php


class Signup extends DBH { //for updating the database inserting creating tabeles
    protected function setUser($user,$pwd,$mail){

        $pwd_hash = password_hash($pwd , PASSWORD_DEFAULT);

        $stmt = $this->connect()->prepare('INSERT INTO users (user , password, Email) VALUES (?,?,?);' );
       

        if(!$stmt->execute([$user,$pwd_hash,$mail])){
            $stmt =null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }


        $stmt =null;
        
    
    }

    protected function checkUser($user){
        $stmt = $this->connect()->prepare('SELECT user FROM users WHERE user=?' );     


        if(!$stmt->execute([$user])){
            $stmt =null;
            header("location: ../index.php?error=stmtfailed+pp");
            exit();
        }
        
        if($stmt->rowCount()>0){
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }
        return $resultCheck;
    
    }
    protected function checkEmail($mail){
        $stmt = $this->connect()->prepare('SELECT Email FROM users WHERE Email=?' );     


        if(!$stmt->execute([$mail])){
            $stmt =null;
            header("location: ../index.php?error=stmtfailed+pp");
            exit();
        }
        
        if($stmt->rowCount()>0){
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }
        return $resultCheck;

    }

}