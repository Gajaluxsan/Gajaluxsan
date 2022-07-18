 <?php 

class dbc{

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

}







?>