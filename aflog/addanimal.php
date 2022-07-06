
<?php 
session_start(); 
if (empty($_SESSION['name'])){
	include('include/link.inc.php'); 
	// include ('include/bfheader.inc.php');
	include ('class/autocaller.class.php');
	$n =new profile();
	$nn =$n->getimgadd('gajaluxsn');
	$_SESSION['img'] ='gajaluxsan.jpg';
	?>

	<div class="container-sm mt-5 bg-danger">
		<div class="row row-cols-sm rows-cols-md-4">
			<div class="col bg-primary"></div>
			<div class="col-sm-2 bg-danger">
				rfgvfg
			</div>
			<div class="col bg-info"></div>
		</div>
	</div>

















	<?php
	
}
else{
	header("Location: /puupys/ulogin.ua.php");
}

?>


















<?php	



include ('include/bfooter.inc.php'); 
?>
