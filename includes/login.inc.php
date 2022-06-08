<?php


if(isset($_POST["sub_log"])){
    // grabing the data
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    

    //instantiate signupcontr class
    include "../modules/DBH.class.php";
    include "../modules/login.class.php";
    include "../controls/login-contr.class.php";
    
    
    $Login = new LoginContr($user,$pwd);

    // running error handlers and user signup
    
    echo $Login->LoginUser();
   
}
