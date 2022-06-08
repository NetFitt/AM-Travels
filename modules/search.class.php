<?php


class Search extends DBH { //for updating the database inserting creating tabeles
    
    
    protected function getLocation($location){
        
        $stmt = $this->connect()->prepare("SELECT * FROM pages WHERE page LIKE '%".$location."%' " );
        $stmt->execute();

        $locations = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        

        return $locations;
        



    }
   

}