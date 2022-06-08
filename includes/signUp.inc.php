<?php

if(isset($_POST["sub_2"])){
    // grabing the data
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $pwd_rep = $_POST['pwd_rep'];
    $mail = $_POST['mail'];
    $code = "";
    $random = "";

    //instantiate signupcontr class

     include "../modules/DBH.class.php";
     include "../modules/signUp.class.php";
     include "../controls/signUp-contr.class.php";
   
     $signup = new SignupContr($user,$pwd,$pwd_rep,$mail,$code,$random);

     // running error handlers and user signup

     echo $signup->signupUser();
    
    //going to back to front page
}

if(isset($_POST["send"])){
    // grabing the data
    $code = $_POST['code'];
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $pwd_rep = $_POST['pwd_rep'];
    $mail = $_POST['mail'];
    $random = $_POST['random'];

    //instantiate signupcontr class

     include "../modules/DBH.class.php";
     include "../modules/signUp.class.php";
     include "../controls/signUp-contr.class.php";
   
     $signup = new SignupContr($user,$pwd,$pwd_rep,$mail,$code,$random);

     // running error handlers and user signup

     echo $signup->very_code();
    
  
}