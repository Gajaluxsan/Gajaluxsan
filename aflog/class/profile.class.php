<?php 


include('controller.class.php');
class profile extends controller{

public function getimgadd($uname){
    $n =new controller();
$stmt = $n->getRs("SELECT * FROM `customer` WHERE `username`='$uname'");
while($row =$stmt->fetch_assoc()){
    if($row['avatar_status'] == 1){
        return $row['avatar_add'];
    }
    else{
        return "defult.png";
    }

}
}
public function findcusid($uname){
 



}

}
