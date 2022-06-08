<?php


class Login extends DBH { //for updating the database inserting creating tabeles
    protected function getUser($user,$pwd){
        $stmt = $this->connect()->prepare('SELECT password FROM users WHERE user = ? OR Email = ?' );
       

        if(!$stmt->execute([$user,$user])){
            $stmt =null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount()== 0){
            $stmt=null;
            return "user not found !";
        }

        

        $pwdmatch=$stmt->fetchALL(PDO::FETCH_ASSOC);

        

        $checkpwd = password_verify($pwd,$pwdmatch[0]['password']);
        
        if($checkpwd == false){
            return "wrong password !";   
        }elseif($checkpwd==true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE user = ? OR Email= ? AND password = ?' );

            if(!$stmt->execute([$user,$user,$pwdmatch[0]['password']])){
                $stmt =null;
                header("location: ../index.php?error=this an eror");
                exit();
            }

            if($stmt->rowCount() ==0){
                return "user does not exist!";
                
            }
        

            $user = $stmt->fetchALL(PDO::FETCH_ASSOC);

            session_start();
            
            $_SESSION["id"]= $user[0]['id'];
            $_SESSION["user"]= $user[0]['user'];
            $_SESSION["mail"]= $user[0]['Email'];

            
        }  
        $stmt =null;
    }
   

}