<?php 

class controller {

 private $localhost ="Localhost";
    private $user ="root";
    private $pass ="";
    private $dbname ="puppys";

public function connect(){
        try {
             $conn=mysqli_connect($this->localhost,$this->user,$this->pass,$this->dbname);
             if (!$conn) {
            return false;
             }

             else{
             return $conn;
         }
        } catch (Exception $e) {
            // print("Error! : ".$e->getMessage()."<br/>");
            return false;
        }
       
    }


public function getRs($sql){
    $conn =$this->connect();
    try {
        if ($stmt = mysqli_query($conn, $sql)){
        return $stmt;
       }
       else{
        echo  mysqli_error($conn)."<script >alert('smoeerror');</script>";
        return false;
       }
           
        }
      
         catch (Exception $e) {
            return false;
        }


    
}
// public static function getRsstatic($sql){
//     $conn =$this->connect();
//     try {
//         if ($stmt = mysqli_query($conn, $sql)){
//         return $stmt;
//        }
//        else{
//         echo  mysqli_error($conn)."<script >alert('smoeerror');</script>";
//         return false;
//        }
           
//         }
      
//          catch (Exception $e) {
//             return false;
//         }


    
// }


}

// $nn = controller::getRsstatic('SELECT * FROM `animal`');
// print_r($nn);