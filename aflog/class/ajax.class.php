
<?php 

include 'autocaller.class.php';
$n =new controller();
$type = isset($_POST['type']) ? $_POST['type'] : 0;
 $tyid = findtypeid($type);
function findtypeid($type){
	$n =new controller();
	$stmt=$n->getRs("SELECT `type_id` FROM `animaltype` WHERE `type`='$type'");
	while ($row =mysqli_fetch_assoc($stmt)) {
		$type =$row['type_id'];
			}
	return $type;
}

// echo "string";
	 $result1 = "<option>Select State</option>";
        $stm =$n->getRs("SELECT `breed_name` FROM `animal_breed` WHERE `type id`='$tyid'");
        while ($result = mysqli_fetch_assoc($stm)) {
           echo  $result1 = "<option value=>" . $result['breed_name'] . "</option>";
// echo "<script>console.log('');</script>";


        }
        // echo $result1;

