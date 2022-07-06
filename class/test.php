 <?php 

 ob_start();
 
include ('connect.php');


class test extends dbc{
    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }


    //gethering breed catagorys
    public function getbreed(){
        $sql ="SELECT * FROM `animaltype` ";
        $stmt =$this->connect()->query($sql);
        
        while ($row =$stmt->fetch()) {
            echo $row['type'].'<br>';
        }
    }

    



    public function login($username,$password){

         try {
             $sql ="call login('$username','$password',@mm)";
        if ($stmt = mysqli_query($this->conn, $sql)){
           while ($row =mysqli_fetch_assoc($stmt)){
                if($row['result'] == 1){
        return true;
       }
       else{
        return false;
       }
           }
        }
        else{
             echo "Error: " . $sql . "<br>" . $this->connect()->error;
        }
      }
         catch (Exception $e) {
            return false;
        }

    }
    public function fidcuid($uname){


         try {
             $sql ="SELECT `cus_id` FROM `customer` WHERE `username`='$uname'";
        if ($stmt = mysqli_query($this->conn, $sql)){
          $row =mysqli_fetch_assoc($stmt);
               
        return $row['cus_id'];
      
           
        }
        else{
             echo "Error: " . $sql . "<br>" . $this->connect()->error;
        }
      }
         catch (Exception $e) {
            return false;
        }
    }

    public function logdetails($userid,$browser,$os){

         try {
             $sql ="INSERT INTO `logindetails`( `user_id`,`browser`, `osdetails`) VALUES ('$userid','$browser','$os')";
        if ($stmt = mysqli_query($this->conn, $sql)){
          try {
              $sql1 ="SELECT max(`login_id`) as login_id FROM `logindetails`";
        if ($stmt1 = mysqli_query($this->conn, $sql1)){
            $row1 =mysqli_fetch_assoc($stmt1);
            return $row1['login_id'];
        }
          } catch (Exception $e) {
              
          }
        }
        else{
             echo "Error: " . $sql . "<br>" . $this->connect()->error;
        }
      }
         catch (Exception $e) {
            return false;
        }

    }

    public function logout($login_id){

         try {
             $sql ="UPDATE `logindetails` SET `logouttime`=CURRENT_TIMESTAMP WHERE `login_id`=$login_id;";
        if ($stmt = mysqli_query($this->conn, $sql)){
           echo "sussesfull insert";
        }
        else{
             echo "Error: " . $sql . "<br>" . $this->connect()->error;
        }
      }
         catch (Exception $e) {
            return false;
        }

    }




    }
