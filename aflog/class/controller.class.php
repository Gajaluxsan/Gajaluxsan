<?php 


include('connect.class.php');

class controller extends dbconnect{

public function getRs($sql){
    try {
        if ($stmt = mysqli_query($this->connect(), $sql)){
         return $stmt;
        }
        else{
          return "Can't Run This Sql Chack its Your Selft";
        }
      }
         catch (Exception $e) {
            return $e->getMessage();
        }
     }

}



