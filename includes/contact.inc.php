<?php

if(isset($_POST["sub"])){
    // grabing the data
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    //instantiate signupcontr class

     include "../controls/contact-contr.class.php";
     
   
     $contact = new Contact($mail,$phone,$message);

     // running error handlers and user signup

     echo $contact->sendMail();
    
    //going to back to front page
}