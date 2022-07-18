<?php 
session_start();
include_once 'controller.class.php';


if(isset($_POST['animaladd'])){
	if(isset($_SESSION['cid'])){
	$add =new animaladd($_POST,$_FILES['img1']);
}
else{
	header("Location: /puupys/ulogin.ua.php");
	exit();
}
}
else{
	header("Location: /puupys/ulogin.ua.php");
	exit();
}

class animaladd {

	private $conrl;

	private $post;
	private $poo ;	

	private $name;
	private $type;
	private $breed;
	private $color;
	private $date;
	private $price;
	private $location;
	private $gender;
	private $vaccine;
	private $img1;
	private $training;
	private $about;

	private $filedesc;

	private $tyid;
	private $breedid;


	public function  __construct($Poost,$image){
		$this->addconn();
		$this->img1 =$image;
		$this->post=$Poost;
		$this->poo =$Poost;
		$this->marece();
		$this->breed="cutes";
		
		if($this->chacker()){
			$this->uplordimg();
			$this->findid($this->type,$this->breed);
			$this->saveani();

		}

	}


	private function chacker(){
		$test_arr  = explode('/', $this->date);
		$temp =$this->img1['tmp_name'];
		$name =$this->img1['name'];
		$size =$this->img1['size'];
		$error=$this->img1['error'];
		$te=$this->img1['type'];
		$tarr=explode("/",$te);
		$type=$tarr[1];
		$allwed =array("jpg","jpeg","png","pdf");
		$newfilename=$_SESSION['cid'].uniqid().".".$type;
		$this->filedesc = '../include/img/'.$newfilename;
		if( empty($this->name) || empty($this->type) || empty($this->breed) || empty($this->color) || empty($this->date) || empty($this->price) || empty($this->location) || empty($this->gender) || empty($this->vaccine) || empty($this->training) || empty($this->about)){
			header("Location: /puupys/aflog/addanimal.php?add=emp&ar=". serialize($this->poo));
			exit();
		}
		elseif (!is_numeric($this->price)) {
			header("Location: /puupys/aflog/addanimal.php?add=date&ar=". serialize($this->poo));
			exit();
		}

		elseif (!$error == 0) {
			header("Location: /puupys/aflog/addanimal.php?add=img&ar=". serialize($this->poo));
			exit();
		}
		else{
			return true;
		}
	}


	private function addconn(){
		$nn = new controller();
		$this->conrl=$nn;
	}

	private function marece(){
		$this->name =$this->data($this->post['name']);
		$this->type =$this->data($this->post['type']);
		$this->breed =$this->data($this->post['breed']);
		$this->color =$this->data($this->post['color']);
		$this->date =$this->data($this->post['date']);
		$this->price =$this->data($this->post['price']);
		$this->location =$this->data($this->post['location']);
		$this->gender =$this->data($this->post['gender']);
		$this->vaccine =$this->data($this->post['vaccine']);
		$this->training =$this->data($this->post['training']);
		$this->about =$this->data($this->post['about']);
	}

	private function data($data){
		$data = htmlspecialchars($data);
		$data = htmlentities($data);
		$data = strip_tags($data);
		return $data;
	}

	

	private function uplordimg(){
		move_uploaded_file($this->img1['tmp_name'], $this->filedesc);			
	}


	public function findid($type,$breed){

			
		$stm3 =$this->conrl->getRs("CALL `ftyid`('$type', '$breed')");
		while($row =mysqli_fetch_assoc($stm3)){
			$this->tyid=$row['tid'];
			$this->breedid=$row['brid'];

		}
	}	

	private function saveani(){
		echo $this->tyid;
		$stm3 =$this->conrl->getRs("INSERT INTO `animal`( `al_name`, `animaltype`, `breed_id`, `color`, `dob`, `price`, `location`, `gender`, `vaccined`, `imgadd1`, `trained`, `About`, `points`) VALUES ('$this->name','$this->tyid','$this->breedid','$this->color','$this->date','$this->price','$this->location','$this->gender','$this->vaccine','$this->filedesc','$this->training','$this->about','10')");
	}
 



}








