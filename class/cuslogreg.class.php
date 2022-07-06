<?php 
include ('connect.php');
class cuslogreg extends dbc{
// $fname,$lname,$uname,$address,$phone,$email,$password,$zip,$county
	private $post;
	private $fname;
	private $lname;
	private $uname;
	private $address;
	private $phone;
	private $email;
	private $password;
	private $zip;
	private $county;
	private $poo ;

	function  __construct($Poost){
		$this->post=$Poost;
		$this->poo =$Poost;
		$this->poo['pass']="not";
		$this->poo['repassword']="not";
		 $this->marece();
		 if($this->chacker()){
			if(!$this->check_user()){
			 header("Location: /puupys/register.ur.php?signup=aldy");
				exit(0);
			}
			else{
			$this->insertcustomer();
			}
		
		 }
		
	}


private function insertcustomer(){
       try {
             $sql ="INSERT INTO `customer`(`fname`, `lname`, `username`, `address`, `phoneno`, `email`, `password`, `Zipcode`, `Country`) VALUES ('$this->fname','$this->lname','$this->uname','$this->address','$this->phone','$this->email','$this->password','$this->zip','$this->county')";
           if ($this->connect()->query($sql) === TRUE) {
  header("Location: /puupys/ulogin.ua.php?signup=susses");
				exit(0);
} else {
  echo "Error: " . $sql . "<br>" . $this->connect()->error;
}
                  }
         catch (Exception $e) {
       print("Error! : ".$e->getMessage()."<br/>");
            return false;
       }
    }

	// ithu user , email chack panna
    private function check_user(){
        try {
             $sql ="call chackusernameemail('".$this->email."','".$this->uname."',@mm);";
       $stmt =$this->connect()->query($sql);
       $row =$stmt->fetch_assoc(); 
       if($row['result'] == 1){
        return false;       
       }
       else{
        return true;
       }
        } catch (Exception $e) {
        	print("Error! : ".$e->getMessage()."<br/>");
            return false;
        }
    }

	private function marece(){
	$this->fname =$this->data($this->post['fname']);
	$this->lname =$this->data($this->post['lname']);
	$this->uname =$this->data($this->post['uname']);
	$this->address =$this->data($this->post['address']);
	$this->phone =$this->data($this->post['upno']);
	$this->email =$this->data($this->post['email']);
	$this->password=$this->data(bin2hex($this->post['pass']));
	$this->zip=$this->data($this->post['zip']);
	$this->county=$this->data($this->post['county']);
	}

	private function data($data){
	     $data = htmlspecialchars($data);
	    $data = htmlentities($data);
	    $data = strip_tags($data);
	    return $data;
	}



	private function chacker(){
            
		if(empty($this->fname) || empty($this->lname) || empty($this->uname) || empty($this->address) || empty($this->phone) || empty($this->email) || empty($this->password) || empty($this->zip) || empty($this->county)){
			 header("Location: /puupys/register.ur.php?signup=emp&ar=" . serialize($this->poo));
			
		}
		elseif(!preg_match("/^[a-zA-Z]*$/",$this->lname) || !preg_match("/^[a-zA-Z]*$/",$this->fname) ){
			 header("Location: /puupys/register.ur.php?signup=chronly&ar=" . serialize($this->poo));
			exit();
		}
		elseif(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
			 header("Location: /puupys/register.ur.php?signup=em&ar=" . serialize($this->poo));
			exit();
		}
		elseif(!is_numeric($this->phone) || strlen($this->phone)>10){
			 header("Location: /puupys/register.ur.php?signup=pe&ar=" . serialize($this->poo));
			exit();
		}
		else{

			return true;
		}

	}



}
// print_r($_POST);
if(isset($_POST['signup']))
{
    $poster = $_POST;
    $reg =new cuslogreg($poster);
}
?>
