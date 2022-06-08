<?php

    if(isset($_POST['location'])){
    // grabing the data
    $location = $_POST['location'];
    
   

    //instantiate signupcontr class

     include "../modules/DBH.class.php";
     include "../modules/search.class.php";
     include "../controls/search-contr.class.php";
   
     $search = new SearchContr($location);

     // running error handlers and user signup
     
     $arr['result'] = $search->searchPage();
     echo json_encode($arr);
     
    
    //going to back to front page

}